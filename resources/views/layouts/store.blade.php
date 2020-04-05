<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Feather -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<nav class="container-fluid store-navigation">
    <div class="row">
        <div class="col-6 d-flex justify-content-center flex-column">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="col-6 d-flex justify-content-center text-right flex-column">
            @if (Route::has('login'))
                <div>
                    <a class="shopping-cart" href="/cart" title="Cart"><i data-feather="shopping-cart"></i></a>
                    @auth
                        <a href="{{ url('/home') }}">Your Products</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    </div>
</nav>
<div class="position-ref">
    <div class="content">
        @yield('content')
    </div>
</div>
<footer>
    Imprint
</footer>
</body>
<script>
    feather.replace();
</script>
</html>
