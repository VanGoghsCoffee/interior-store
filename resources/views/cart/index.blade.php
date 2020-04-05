@extends('layouts.store')

@section('content')
    <div class="container-fluid cart">
        @if(empty($cart))
            <h1>Your Cart is empty</h1>
        @else
            <h1>Your Shopping Cart</h1>
        @endif
        @foreach($cart AS $record)
            <div class="row d-flex align-items-center cart-row">
                <div class="col-md-4 dashboard-product-image">
                    <img src="{{ $record["entry"]["product"]->product_image}} " />
                </div>
                <div class="col-md-3">{{$record["entry"]["product"]->title}}</div>
                <div class="col-md-3">{{$record["entry"]["product"]->price}}</div>
                <div class="col-md-2">Amount: {{$record["entry"]["amount"]}}</div>
            </div>
        @endforeach
        @if(!empty($cart))
            <div class="row">
                <div class="col text-left">
                    <a href="/" class="btn btn-dark">Continue Shopping</a>
                </div>
                <div class="col text-right">
                    <a href="/order" class="btn btn-dark">Check Out</a>
                </div>
            </div>
        @endif
    </div>
@endsection
