<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Khoa Luan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tìm phòng trọ</h1>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{Route('home')}}">Trang chủ</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Giới thiệu</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Phòng Mới</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Trợ giúp</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{Route('getLogin')}}">Đăng ký</a></li>
                        <li><a href="{{Route('getRegister')}}">Đăng nhập</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Menu</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Phần nội dung
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
