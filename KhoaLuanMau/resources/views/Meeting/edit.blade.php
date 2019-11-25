@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('indexMeeting')}}" class="btn btn-success">BACK HOME</a>
                <h1>EDIT MEETING</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('editPostMeetingSubmit',$meetings->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">username</label>
                    <input type="text" name="username" class="form-control" value="{{$meetings->username}}">
                    <label for="text">phone</label>
                    <input type="text" name="phone" class="form-control" value="{{$meetings->phone}}">
                    <label for="text">time</label>
                    <input type="text" name="time" class="form-control" value="{{$meetings->time}}">
                    <label for="text">title</label>
                    <input type="text" name="title" class="form-control" value="{{$meetings->title}}">
                    <label for="text">Price</label>
                    <input type="text" name="describe" class="form-control" value="{{$meetings->describe}}">
                    <input type="submit" name="btn_sub" class="btn btn-light">
                </form>
            </div>
        </div>
    </div>
@endsection