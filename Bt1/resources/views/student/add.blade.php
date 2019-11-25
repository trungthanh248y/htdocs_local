@extends('.master');
@section('title','ADD')

@section('content')
    <a href="{{Route('index')}}" class="btn btn-success">REQUEST</a>
    <h3><p class="text-success">ADD STUDENT</p></h3>
    <form action="{{Route('createStudent')}}" method="post">
        @csrf
        {{--@if($mess!='')--}}
            {{--<p class="text-success">{{$mess}}</p><br>--}}
            {{--@endif--}}
        @if(count($errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
            </ul>
            @endif
        <lable>User name</lable>
        <br>
        <input type="text" class="form-group" name="username"><br>
        <lable>First name</lable>
        <br>
        <input type="text" class="form-group" name="firstname"><br>
        <lable>Last name</lable>
        <br>
        <input type="text" class="form-group" name="lastname"><br>
        <lable>Address</lable>
        <br>
        <input type="text" class="form-group" name="address"><br>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection
