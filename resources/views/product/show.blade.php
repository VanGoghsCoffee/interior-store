@extends('layouts.store')

@section('content')
    <div class="container-fluid product-detail">
        <div class="row">
            <div class="col-md-6">
                <div class="dashboard-product-image">
                    <img src="{{$product->product_image}}" alt="{{$product->title}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2>{{$product->title}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Stock: {{$product->stock}}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('cart.store') }}">
                        <div class="row">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}" id="product_id" />
                            <div class="form-group col-md-6">
                                <label for="amount">Amount</label>
                                <input id="amount" value="1" type="number" class="product-detail-input-amount @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" autocomplete="amount" autofocus>

                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
