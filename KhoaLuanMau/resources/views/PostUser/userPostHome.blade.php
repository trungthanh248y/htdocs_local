@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-6">
                        <img style="height:340px;width:100%" src="{{asset('images/'.$posts->image)}}" alt="Not Image">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-6">
                        <img style="width: 150px;height: 150px" src="http://123nhadatviet.com/files/properties/2019/2/28/images/20190228_030408_1600480_0.jpg">
                        <hr class="mb-4">
                        <img style="width: 150px;height: 150px" src="http://123nhadatviet.com/files/properties/2019/2/28/images/20190228_030408_1600480_2.jpg">
                        </div>
                        <div class="col-md-6">
                        <img style="width: 150px;height: 150px" src="https://www.chotot.com/kinhnghiem/wp-content/uploads/2016/11/Nhung-dieu-tan-sinh-vien-can-biet-khi-thue-phong-tro.jpg">
                        <hr class="mb-4">
                        <img style="width: 150px;height: 150px" src="http://123nhadatviet.com/files/properties/2019/2/28/images/20190228_030408_1600480_1.jpg">
                        </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-8">
                    <p>Title: <b>{{$posts->title}}</b></p>
                    </div>
                    <hr class="mb-4">
                    <div class="col-sm-4">
                        @if($posts->sale!=null)
                            <strike>Price: <b>{{$posts->describe}} VN đồng</b></strike>

                            <p>Sale: <b>{{$posts->sale}} VN đồng</b></p>

                        @else
                            <p>Price: <b>{{$posts->describe}} VN đồng</b></p>
                        @endif

                    <p>Acreage: <b>{{$posts->acreage}} m2</b></p>
                    </div>
                    <div class="col-md-12">
                        <p><p class="font-weight-bold">Address:</p> {{$posts->address}}</p>
                    </div>
                </div>
                <hr class="mb-4">
                <p><p class="font-weight-bold">Content:</p> {{$posts->content}}</p>
                <hr class="mb-4">
                <lable><p class="font-weight-bold">Item: </p></lable>
                <div class="row">
                    @foreach($items as $item)
                        <div class="col-sm-4">
                            <p><lable><input type="checkbox" name="item[]"
                                    @if(in_array($item->id,$sub_item)){{"checked='checked'"}}
                                    @endif
                                    disabled="disabled">{{$item->item}}</lable></p>
                        </div>
                    @endforeach
                </div>

                <hr class="mb-4">

                <div class="mymap" style="width: 90%;margin-left: 65px ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.089127010306!2d105.57472175017492!3d20.91095222555259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134456c69afbb4d%3A0xaa4e3f4c05b31119!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBMw6JtIG5naGnhu4dw!5e0!3m2!1svi!2s!4v1556766043982!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <hr class="mb-4">

            @if(Auth::check())
                <div>
                    <a href="{{Route('order',$posts->id)}}" class="btn btn-info">Meeting appointment</a>
                </div>
                @endif
                <hr class="mb-4">
                @if(Auth::check())
                    <div class="well">
                        <h4>Comment....</h4>
                        @if($errors)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        <form action="{{Route('commnet',$posts->id)}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                            <textarea name="comment" class="form-control" rows="3" placeholder="
                            @if(session('mess'))
                            {{session('mess')}}
                            @endif
                                    "></textarea>
                            </div>
                            <input type="submit" value="Comment" class="btn btn-light">
                        </form>
                        <hr class="mb-6">
                    </div>
                @endif
                <div class="bg-white container">
                <div>
                    @if($comments!=null)
                        @foreach($comments as $comment)
                            <p>{{\App\User::find($comment->id_user)->name}} <span class="text-muted">{{$comment->created_at}}</span> </p>
                            <p>{{$comment->comment}}</p>
                        @endforeach
                    @endif
                </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                @foreach($events as $event)
                    <div class="card flex-row mb-2 shadow-sm h-md-150">
                        <div class="card-body d-flex flex-column align-items-start">
                            <div class="media">
                                <div class="media-left">
                                    <div class="col-auto d-none d-lg-block">
                                        <a href="{{Route('postUser',$event->id)}}">
                                        <img style="height:150px;width:150px" src="{{asset('images/'.$event['image'])}}" alt="Not Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-body">
{{--                                    <h3 class="media-heading">--}}
{{--                                        <a href="{{Route('postUser',$event->id)}}">{{$event['title']}}</a>--}}
{{--                                    </h3>--}}
                                    <p>acreage: {{$event['acreage']}} m2</p>


                                    @if($posts->sale!=null)
                                        <strike>Price: <b>{{$posts->describe}} VN đồng</b></strike>

                                        <p>Sale: <b>{{$posts->sale}} VN đồng</b></p>

                                    @else
                                        <p>Price: <b>{{$posts->describe}} VN đồng</b></p>
                                    @endif

                                </div>
                            </div>
                            <hr class="mb-4">
                        </div>
                    </div>
                @endforeach
            </div>


{{--            Thanh nav chay ruoi--}}
            <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if(count($species)>2)
{{--                            Điểm leo ban đầu--}}
                            <div class="carousel-item active">
                            <div class="row col-auto">
                                @for($j=0;$j<3;$j++)
                                    <div class="col-4">
                                                    <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                        <div class="card-body d-flex flex-column align-items-start">
                                                            {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                                                            <div class="row">

                                                                {{--                    style="clear: both;display: table;"style="display: block"--}}

                                                                <div class="col-auto d-none d-lg-block">
                                                                    <center>
                                                                        <img style="height:180px;width:230px" src="{{asset('images/'.$species[$j]->image)}}" alt="Not Image">
                                                                    </center>
                                                                </div>

                                                                <div class="col p-4 d-flex flex-column position-static">

                                                                    @if($species[$j]->sale!=null)
                                                                        <strike>Price: <b>{{$species[$j]->describe}} VN đồng</b></strike>

                                                                        <p>Sale: <b>{{$species[$j]->sale}} VN đồng</b></p>

                                                                    @else
                                                                        <p>Price: <b>{{$species[$j]->describe}} VN đồng</b></p>
                                                                    @endif


                                                                    <h3 class="mb-0">{{$species[$j]->title}}</h3>
                                                                    <div class="mb-1 text-muted">Nov {{$species[$j]->id}}</div>
                                                                    @if (strlen($species[$j]->content)>50)
                                                                        <p class="card-text mb-auto">{{ substr($species[$j]->content,0,50)."..." }}</p>
                                                                    @else
                                                                        <p class="card-text mb-auto">{{ $species[$j]->content }}</p>
                                                                    @endif
                                                                    <a href="{{Route('postUser',$species[$j]->id)}}" class="stretched-link">Continue reading</a>
                                                                </div>

                                                                <div style="clear: both"></div>
                                                            </div>
                                                            {{--                            </div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                @endfor
                            </div>
                            </div>
                            @for($t=3;$t<count($species)-2;$t++)
{{--                                Điểm chạy--}}
                                <div class="carousel-item">
                                <div class="row col-auto">

                                    <div class="col-4">
                                        <div class="card flex-row mb-2 shadow-sm h-md-150">
                                            <div class="card-body d-flex flex-column align-items-start">
                                                {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                                                <div class="row">

                                                    {{--                    style="clear: both;display: table;"style="display: block"--}}

                                                    <div class="col-auto d-none d-lg-block">
                                                        <center>
                                                            <img style="height:180px;width:230px" src="{{asset('images/'.$species[$t]->image)}}" alt="Not Image">
                                                        </center>
                                                    </div>

                                                    <div class="col p-4 d-flex flex-column position-static">

                                                        @if($species[$t]->sale!=null)
                                                            <strike>Price: <b>{{$species[$t]->describe}} VN đồng</b></strike>

                                                            <p>Sale: <b>{{$species[$t]->sale}} VN đồng</b></p>

                                                        @else
                                                            <p>Price: <b>{{$species[$t]->describe}} VN đồng</b></p>
                                                        @endif

                                                        <h3 class="mb-0">{{$species[$t]->title}}</h3>
                                                        <div class="mb-1 text-muted">Nov {{$species[$t]->id}}</div>
                                                        @if (strlen($species[$t]->content)>50)
                                                            <p class="card-text mb-auto">{{ substr($species[$t]->content,0,50)."..." }}</p>
                                                        @else
                                                            <p class="card-text mb-auto">{{ $species[$t]->content }}</p>
                                                        @endif
                                                        <a href="{{Route('postUser',$species[$t]->id)}}" class="stretched-link">Continue reading</a>
                                                    </div>

                                                    <div style="clear: both"></div>
                                                </div>
                                                {{--                            </div>--}}
                                            </div>
                                        </div>
                                    </div>

                                    @if($t<count($species)-2)

{{--                                        Bang 1--}}

                                            <div class="col-4">
                                                <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                    <div class="card-body d-flex flex-column align-items-start">
                                                        {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                                                        <div class="row">

                                                            {{--                    style="clear: both;display: table;"style="display: block"--}}

                                                            <div class="col-auto d-none d-lg-block">
                                                                <center>
                                                                    <img style="height:180px;width:230px" src="{{asset('images/'.$species[$t+1]->image)}}" alt="Not Image">
                                                                </center>
                                                            </div>

                                                            <div class="col p-4 d-flex flex-column position-static">

                                                                @if($species[$t+1]->sale!=null)
                                                                    <strike>Price: <b>{{$species[$t+1]->describe}} VN đồng</b></strike>

                                                                    <p>Sale: <b>{{$species[$t+1]->sale}} VN đồng</b></p>

                                                                @else
                                                                    <p>Price: <b>{{$species[$t+1]->describe}} VN đồng</b></p>
                                                                @endif

                                                                <h3 class="mb-0">{{$species[$t+1]->title}}</h3>
                                                                <div class="mb-1 text-muted">Nov {{$species[$t+1]->id}}</div>
                                                                @if (strlen($species[$t+1]->content)>50)
                                                                    <p class="card-text mb-auto">{{ substr($species[$t+1]->content,0,50)."..." }}</p>
                                                                @else
                                                                    <p class="card-text mb-auto">{{ $species[$t+1]->content }}</p>
                                                                @endif
                                                                <a href="{{Route('postUser',$species[$t+1]->id)}}" class="stretched-link">Continue reading</a>
                                                            </div>

                                                            <div style="clear: both"></div>
                                                        </div>
                                                        {{--                            </div>--}}
                                                    </div>
                                                </div>
                                            </div>

{{--                                        Bang 2--}}

                                            <div class="col-4">
                                                <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                    <div class="card-body d-flex flex-column align-items-start">
                                                        {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                                                        <div class="row">

                                                            {{--                    style="clear: both;display: table;"style="display: block"--}}

                                                            <div class="col-auto d-none d-lg-block">
                                                                <center>
                                                                    <img style="height:180px;width:230px" src="{{asset('images/'.$species[$t+2]->image)}}" alt="Not Image">
                                                                </center>
                                                            </div>

                                                            <div class="col p-4 d-flex flex-column position-static">

                                                                @if($species[$t+2]->sale!=null)
                                                                    <strike>Price: <b>{{$species[$t+2]->describe}} VN đồng</b></strike>

                                                                    <p>Sale: <b>{{$species[$t+2]->sale}} VN đồng</b></p>

                                                                @else
                                                                    <p>Price: <b>{{$species[$t+2]->describe}} VN đồng</b></p>
                                                                @endif

                                                                <h3 class="mb-0">{{$species[$t+2]->title}}</h3>
                                                                <div class="mb-1 text-muted">Nov {{$species[$t+2]->id}}</div>
                                                                @if (strlen($species[$t+2]->content)>50)
                                                                    <p class="card-text mb-auto">{{ substr($species[$t+2]->content,0,50)."..." }}</p>
                                                                @else
                                                                    <p class="card-text mb-auto">{{ $species[$t+2]->content }}</p>
                                                                @endif
                                                                <a href="{{Route('postUser',$species[$t+2]->id)}}" class="stretched-link">Continue reading</a>
                                                            </div>

                                                            <div style="clear: both"></div>
                                                        </div>
                                                        {{--                            </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                </div>
                                </div>
                            @endfor
                        @else
                        <div class="row col-auto">
                            @for($i=0;$i<count($species);$i++)
                                <div class="col-4">
                                <div class="card flex-row mb-2 shadow-sm h-md-150">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                                        <div class="row">

                                            {{--                    style="clear: both;display: table;"style="display: block"--}}

                                            <div class="col-auto d-none d-lg-block">
                                                <center>
                                                    <img style="height:180px;width:230px" src="{{asset('images/'.$species[$i]->image)}}" alt="Not Image">
                                                </center>
                                            </div>

                                            <div class="col p-4 d-flex flex-column position-static">

                                                @if($species[$i]->sale!=null)
                                                    <strike>Price: <b>{{$species[$i]->describe}} VN đồng</b></strike>

                                                    <p>Sale: <b>{{$species[$i]->sale}} VN đồng</b></p>

                                                @else
                                                    <p>Price: <b>{{$species[$i]->describe}} VN đồng</b></p>
                                                @endif

                                                <h3 class="mb-0">{{$species[$i]->title}}</h3>
                                                <div class="mb-1 text-muted">Nov {{$species[$i]->id}}</div>
                                                @if (strlen($species[$i]->content)>50)
                                                    <p class="card-text mb-auto">{{ substr($species[$i]->content,0,50)."..." }}</p>
                                                @else
                                                    <p class="card-text mb-auto">{{ $species[$i]->content }}</p>
                                                @endif
                                                <a href="{{Route('postUser',$species[$i]->id)}}" class="stretched-link">Continue reading</a>
                                            </div>

                                            <div style="clear: both"></div>
                                        </div>
                                        {{--                            </div>--}}
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                        @endif
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
            </main>

    </div>
        </div>
    </div>
{{--    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>--}}
{{--    <script>tinymce.init({selector:'textarea'});</script>--}}
@endsection
