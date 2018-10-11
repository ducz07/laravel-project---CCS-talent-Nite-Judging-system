<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <br>
    <br><br><br>
@include('auth.login')
</body>
</html>



        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


        </div>-->
