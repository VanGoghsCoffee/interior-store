@extends('layouts.store')

@section('content')
    <div class="hero">
        <h1>Interior Shop</h1>
        <div class="hero-image">
        </div>
    </div>

    <div class="products">
        <div class="container-fluid">
            <div class="row">
                @foreach($products as $product)
                    @if($product->stock > 0)
                        <div class="col-md-6">
                            <div class="product">
                                <div class="product-image">
                                    <a href="/products/{{$product->id}}" title="Details about {{$product->title}}}">
                                        <img src="{{$product->product_image}}"/>
                                    </a>
                                </div>
                                <div class="product-info container-fluid">
                                    <div class="row">
                                        <div class="col product-title">
                                            <a href="/products/{{$product->id}}" title="Details about {{$product->title}}}">{{$product->title}}</a>
                                        </div>
                                        <div class="col product-seller">
                                            {{$product->username($product->user_id)}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col product-price">
                                            <strong>{{$product->price}}</strong>
                                        </div>
                                        <div class="col product-order">
                                            <form method="POST" action="/cart">
                                                @csrf
                                                <input type="hidden" name="amount" id="amount" value="1" />
                                                <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}" />
                                                <button type="submit" class="btn btn-dark">Order</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
