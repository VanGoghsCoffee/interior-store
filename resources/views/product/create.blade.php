@extends('layouts.app')

@section('content')
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col">
                <h2>New Product</h2>
            </div>
        </div>
        <div class="row">
            <div class="col product-create">
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="product_image">Picture URL</label>
                        <input id="product_image" type="text" class="form-control @error('product_image') is-invalid @enderror" name="product_image" value="{{ old('product_image') }}" autocomplete="product_image" autofocus>

                        @error('product_image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input id="stock" type="number" step="1" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" autocomplete="stock" autofocus>

                        @error('stock')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autocomplete="price" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                            <a href="{{ route('home') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
