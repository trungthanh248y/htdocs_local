<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="card-header">@yield('head')</div>
        <div class="container">
            @yield('content')
        </div>
        <div class="card-footer">@yield('footer')</div>
    </body>
</html>
