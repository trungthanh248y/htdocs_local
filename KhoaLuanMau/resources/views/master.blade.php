<html>
    <head>
        <title>Web tro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <div class="container">@yield('content')</div>
    </body>
</html>

{{--@if (Route::has('login'))--}}
{{--    <div class="top-right links">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}">Login</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}