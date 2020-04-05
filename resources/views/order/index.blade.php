@extends('layouts.store')

@section('content')
    <div class="container-fluid cart">
        <div class="row">
            <div class="col">
                @if(empty($cart))
                    <h1>Your Cart is empty</h1>
                @else
                    <h1>Order Your New Interior</h1>
                @endif
            </div>
        </div>

        <form class="order-form" method="POST" action="{{ route('order.create') }}">
            @csrf
            <div class="row">
                <div class="form-group col-12">
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" class="@error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>

                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="surname">Surname</label>
                    <input id="surname" type="text" class="@error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>

                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="address">Address</label>
                    <input id="address" type="text" class="@error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="city">City</label>
                    <input id="city" type="text" class="@error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus>

                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="zip_code">Zip Code</label>
                    <input id="zip_code" type="text" class="@error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" autocomplete="zip_code" autofocus>

                    @error('zip_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col text-left">
                    <a href="/" class="btn btn-dark">Cancel</a>
                </div>
                <div class="col text-right">
                    <button type="submit" class="btn btn-dark">Order</button>
                </div>
            </div>
        </form>
    </div>
@endsection
