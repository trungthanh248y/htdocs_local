@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>
<body>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><img style="height: 240px; width: 240px"
                               src="http://facebookfplus.com/upload/images/600_97d118b7a6f8f87d18f7b1385ea7665e.png" alt=""></h1>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Quản lý bài đăng</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-product-7-240.png')}}"></li>
                </ul>
                <a href="{{Route('selectPost')}}" class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo </a>
            </div>
        </div>
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Quản lý tin nhắn</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-speech-bubble-26-240.png')}}"></li>
                </ul>
                <a href="{{Route('chatAdmin')}}"  class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo</a>
            </div>
        </div>
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Quản lý đơn hẹn</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-delivery-10-240.png')}}"></li>
                </ul>
                <a href="{{Route('indexMeeting')}}" class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo</a>
            </div>
        </div>
    </div>
    <div class="card-deck mb-3 text-center">
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Quản lý Phòng chờ</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-loading-10-240.png')}}"></li>
                </ul>
                <a href="{{Route('indexPostRomm')}}" class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo</a>
            </div>
        </div>
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Thống kê</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-chart-6-240.png')}}"></li>
                </ul>
                <a href="{{Route('chart')}}" class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo</a>
            </div>
        </div>
        <div class="col-md-4 card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Quản lý cơ sở vật chất</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><img src="{{asset('images/iconmonstr-product-3-240.png')}}"></li>
                </ul>
                <a href="{{Route('itemIndex')}}" class="btn btn-lg btn-block btn-outline-dark">Thực hiện &raquo</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection
