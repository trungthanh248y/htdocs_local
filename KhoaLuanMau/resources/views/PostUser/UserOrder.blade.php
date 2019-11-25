@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-xs-12">
        @if(session('mess'))
            <p class="alert alert-success">{{session('mess')}}</p>
        @endif
        <form action="{{Route('orderPost',$posts->id)}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h1 class="text-center">Meeting appointment</h1>
            <div>
                <lable>User Name</lable>
                <input type="text" name="username" class="form-control" value="{{Auth::user()->name}}" readonly>
            </div>
            <div>
                <lable>Phone</lable>
                <input type="text" name="phone" class="form-control">
            </div>
            <div>
                <lable>Appointment Time</lable>
                <br>
{{--                <input type="text" name="time" class="form-control">--}}
                <select name="time" class="btn btn-sm btn-outline-info dropdown-toggle">
                    <option value="7">7h</option>
                    <option value="8">8h</option>
                    <option value="9">9h</option>
                    <option value="10">10h</option>
                    <option value="11">11h</option>
                    <option value="14">14h</option>
                    <option value="15">15h</option>
                    <option value="16">16h</option>
                    <option value="17">17h</option>
                </select>
            </div>
            <div>
                <lable>title</lable>
                <input type="text" name="title" class="form-control" value="{{$posts->title}}" readonly>
            </div>
            <div>
                <lable>Price</lable>
                <input type="text" name="describe" class="form-control" value="@if($posts->sale==0){{$posts->describe}}@else{{$posts->sale}}@endif" readonly>
            </div>
            <hr class="mb-4">
            <input type="submit" value="Meeting" class="btn btn-info">
        </form>
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
{{--                        <h3 class="media-heading">--}}
{{--                            <a href="{{Route('postUser',$event->id)}}">{{$event['title']}}</a>--}}
{{--                        </h3>--}}
                        <p>acreage: {{$event['acreage']}} m2</p>

                        @if($posts->sale!=null)
                            <strike>Price: <b>{{$posts->describe}} VN đồng</b></strike>

                            <p>Sale: <b>{{$posts->sale}} VN đồng</b></p>

                        @else
                            <p>Price: <b>{{$posts->describe}} VN đồng</b></p>
                        @endif

                    </div>
                </div>
                <hr class="mb-2">
            </div>
        </div>
        @endforeach
    </div>
    </div>
    </div>
@endsection