<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
        <div>@yield('haeder')</div>
        <h3><p class="text-center text-info">Danh sach sinh vien</p></h3>
        <div class="container">@yield('content')</div>
        <div>@yield('footer')</div>
    </body>
</html>
