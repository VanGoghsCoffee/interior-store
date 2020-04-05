@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard">
    <div class="row">
        <div class="col">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-primary ">Add Product</a>
                    <div class="container-fluid pl-0 pr-0 dashboard-product-list">
                        @foreach($user->products as $product)
                            <div class="row d-flex align-items-center">
                                <div class="col-md-2 dashboard-product-image pl-0">
                                    <img src="{{$product->product_image}}" />
                                </div>
                                <div class="col-md-2 pl-sm-0">{{$product->title}}</div>
                                <div class="col-md-2 pl-sm-0">{{$product->price}}</div>
                                <div class="col-md-3 pl-sm-0">{{$product->description}}</div>
                                <div class="col-md-1 pl-sm-0">Stock: {{$product->stock}}</div>
                                <div class="col-md-1 pr-0 pl-sm-0"><a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-info"><i data-feather="edit-3"></i></a></div>
                                <div class="col-md-1 pr-0 pl-sm-0">
                                    <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    @foreach($user->orders as $order)
                        <div class="row d-flex align-items-center">
                            <div class="col-md-2 pl-sm-0">{{$order->surname}}</div>
                            <div class="col-md-2 pl-sm-0">{{$order->name}}</div>
                            <div class="col-md-3 pl-sm-0">{{$order->address}}</div>
                            <div class="col-md-2 pl-sm-0">{{$order->city}}</div>
                            <div class="col-md-2 pl-sm-0">{{$order->zip_code}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
