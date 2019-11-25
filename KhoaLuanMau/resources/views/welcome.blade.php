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
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">


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
    <link href="dashboard.css" rel="stylesheet">
</head>
<body>
<div class="container">
    {{--    menu--}}

    @if(Auth::check())
        <div>
            {{--                <nav class="navbar navbar-dark bg-info flex-md-nowrap">--}}
            {{--                {{Route('search')}}--}}
            <div>
                <form action="javascript:;" method="post">
                    <nav class="navbar navbar-dark bg-info flex-md-nowrap">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input class="form-control form-control-dark w-100" name="search" type="text"
                               placeholder="Search Address" aria-label="Search">

                        <input type="submit" id="sub_search" value="Search" name="btn_sub"
                               class="btn btn-outline-light my-2 my-sm-0">
                    </nav>
                </form>

            </div>
            {{--                </nav>--}}
        </div>

    @endif



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://vnuf.edu.vn/documents/432179/0/Toan%20canh_3.jpg?t=1469175730962"
                     width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src=http://vnuf.edu.vn/documents/454250/2317132/1.jpg?t=1488439625335" width="100%"
                     height="350px">
            </div>
            <div class="carousel-item">
                <img src="http://svlamnghiep.vnuf.edu.vn/documents/1214280/1519863/flycam.jpg?t=1480305281534"
                     width="100%" height="350px">
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/c/cc/%C4%90%E1%BA%A1i_h%E1%BB%8Dc_L%C3%A2m_nghi%E1%BB%87p_Vi%E1%BB%87t_Nam.jpg/800px-%C4%90%E1%BA%A1i_h%E1%BB%8Dc_L%C3%A2m_nghi%E1%BB%87p_Vi%E1%BB%87t_Nam.jpg"
                     width="100%" height="350px">
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    {{--        Thẻ category--}}
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <br>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="13" viewBox="0 0 24 24"><path
                                        d="M24 12.148l-1.361 1.465-10.639-9.883-10.639 9.868-1.361-1.465 12-11.133 12 11.148zm-4 1.749l-2 10.103h-12l-2-10.103 8-7.444 8 7.444zm-7 6.103c0-.552-.448-1-1-1s-1 .448-1 1 .448 1 1 1 1-.448 1-1zm1-5c0-1.105-.896-2-2-2s-2 .895-2 2 .896 2 2 2 2-.895 2-2z"/></svg>Event Post</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <br>


                    {{--        <div class="nav-scroller py-1 mb-2">--}}
                    {{--            <nav class="nav d-flex justify-content-between">--}}
                    <hr class="mb-4">

                    <ul class="nav flex-column">
                        @foreach($eventsAll as $events)
                            <li class="nav-item">
                                <a class="events p-2 text-muted btn-outline-info text-light nav-link"
                                   href="javascript:;" thanhpro="{{$events->id}}">{{$events->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    {{--            </nav>--}}
                    <hr class="mb-4">
                    {{--        </div>--}}


                </div>
            </nav>


            {{--        Thẻ script--}}
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



                {{--    Post--}}

                {{--            {{Route('SearchDetails')}}--}}
                <form action="javascript:;" method="get">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{--                    <div class="search form-group">--}}
                        <h1 class="h2">Search details</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div>
                                {{--                                <lable>Price: </lable>--}}
                                <select name="describe_start" class="btn btn-sm btn-outline-info dropdown-toggle">
                                    <option>Price Start:</option>
                                    <option value="1000000">1000000</option>
                                    <option value="700000">700000</option>
                                    <option value="500000">500000</option>
                                    <option value="300000">300000</option>
                                </select>
                            </div>
                            <div>
                                {{--                                <lable>Price: </lable>--}}
                                <select name="describe_end" class="btn btn-sm btn-outline-info dropdown-toggle">
                                    <option>Price End:</option>
                                    <option value="1000000">1000000</option>
                                    <option value="700000">700000</option>
                                    <option value="500000">500000</option>
                                    <option value="300000">300000</option>
                                </select>
                            </div>
                            <div>
                                {{--                                <lable>Acreage: </lable>--}}
                                <select name="acreage" class="btn btn-sm btn-outline-info dropdown-toggle">
                                    <option>Acreage: ....m2</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <input type="submit" id="btn_search" name="bnt_sub" class="btn btn-sm btn-outline-info"
                                   value="Search details" style="height:28px">
                        </div>
                    </div>
                </form>

                <hr class="mb-4">

                @yield('posts')

                <div class="row mb-2" id="show">
                    <div id="showCategoryProduct">
                        <div class="row col-auto">
                            @if(count($posts)==0)
                                <div class="col-md-12">
                                    <p class="alert alert-danger">Không có bài đăng này</p>
                                </div>
                            @else
                                @if(count($posts)>0)
                                    @foreach($posts as $post)
                                        <div class="col-12">
                                            <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                <div class="card-body d-flex flex-column align-items-start">
                                                    <div class="row">

                                                        {{--                    style="clear: both;display: table;"style="display: block"--}}

                                                        <div class="col-lg-4 col-md-4 col-xs-12" style="float: left">
                                                            <div class="col-auto d-none d-lg-block">
                                                                <center>
                                                                    <a href="{{Route('postUser',$post->id)}}"><img
                                                                                style="height:180px;width:230px"
                                                                                src="{{asset('images/'.$post->image)}}"
                                                                                alt="Not Image"></a>
                                                                </center>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8 col-md-8 col-xs-12">
                                                            <div class="col p-4 d-flex flex-column position-static">
                                                                @if($post->sale!=null)
                                                                    <strike class="d-inline-block mb-2 text-muted">Price: {{$post->describe}}
                                                                        VND</strike>

                                                                    <strong class="d-inline-block mb-2 text-info">Sale: {{$post->sale}}
                                                                        VND</strong>
                                                                @else
                                                                    <strong class="d-inline-block mb-2 text-info">Price: {{$post->describe}}
                                                                        VND</strong>
                                                                @endif


                                                                <h5 class="mb-0">{{$post->title}}</h5>
                                                                <div class="mb-1 text-muted">Nov {{$post->id}}</div>
                                                                @if (strlen($post->content)>50)
                                                                    <p class="card-text mb-auto">{{ substr($post->content,0,50)."..." }}</p>
                                                                @else
                                                                    <p class="card-text mb-auto">{{ $post->content }}</p>
                                                                @endif
                                                                <a href="{{Route('postUser',$post->id)}}"
                                                                   class="stretched-link">Thông tin phòng trọ &raquo</a>
                                                            </div>
                                                        </div>

                                                        <div style="clear: both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{--            Phân Trang--}}
                                    <div class="col-md-12">

                                        @if(count($posts)>=6)
                                            <div class="col-sm-6 col-sm-offset-3">
                                                {{$posts->links()}}
                                            </div>
                                        @else

                                        @endif
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                            <div class="col p-4 d-flex flex-column position-static">
                                                <strong class="d-inline-block mb-2 text-primary">{{$posts->title}}</strong>
                                                <h3 class="mb-0">Featured post</h3>
                                                <div class="mb-1 text-muted">Nov {{$posts->id}}</div>
                                                @if (strlen($posts->content)>50)
                                                    <p class="card-text mb-auto">{{ substr($posts->content,0,50)."..." }}</p>
                                                @else
                                                    <p>{{ $posts->content }}</p>
                                                @endif
                                                <a href="{{Route('postUser',$post['id'])}}" class="stretched-link">Continue
                                                    reading</a>
                                            </div>
                                            <div class="col-auto d-none d-lg-block">
                                                <img style="height:240px;width:200px"
                                                     src="{{asset('images/'.$posts->image)}}" alt="Not Image">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

                <footer class="blog-footer">
                    {{--    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>--}}
                    {{--    <p>--}}
                    {{--        <a href="#">Back to top</a>--}}
                    {{--    </p>--}}
                    <p class="text-info text-center">Khóa luận tốt nghiệp <a href="https://getbootstrap.com/">Trường Đại
                            Học lâm Nghiệp</a></p>
                    <p class="text-info text-center">Giáo viên hướng dẫn: TS. Trần Hồng Diệp, ThS. phpNguyễn Hoàng Ngọc</p>
                    <p class="text-info text-center">Sinh viên thực hiện: Nguyễn Trung Thành </p>
                </footer>
            </main>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.twbsPagination.min.js')}}" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="dashboard.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btn_search').click(function () {
            $.ajax({
                url: '/SearchDetails',
                data: {
                    'describe_start': $("select:optional[name='describe_start']").val(),
                    'describe_end': $("select:optional[name='describe_end']").val(),
                    'acreage': $("select:optional[name='acreage']").val(),
                },
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    $('#show').html(data);
                }
            })
        });
        $('#sub_search').click(function () {
            $.ajax({
                url: '/search',
                data: {'search': $("input:text[name='search']").val()},
                dataType: 'html',
                type: 'GET',
                success: function (data) {
                    $('#show').html(data);
                }
            })
        });
        $('.events').click(function () {
            var id = $(this).attr('thanhpro');
            $.ajax({
                'url': '/ajax',
                data: {id: id},
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    console.log(data);
                    $('#show').html(data);
                }
            })
        });
    });
</script>
</body>
</html>
@endsection