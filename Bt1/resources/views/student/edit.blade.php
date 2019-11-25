@extends('.master');
@section('title','Edit')

@section('content')
    <a href="{{Route('index')}}" class="btn btn-success">REQUEST</a>
    <h3><p class="text-success">EDIT STUDENT</p></h3>
    <form action="{{Route('updateStudent',$students['id'])}}" method="post">
        @csrf
        @if(session('mess'))
            <p class="alert alert-success">{{session('mess')}}</p>
        @endif
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif
        <lable>User name</lable>
        <br>
        <input type="text" class="form-group" name="username" value="{{$students['username']}}"><br>
        <lable>First name</lable>
        <br>
        <input type="text" class="form-group" name="firstname" value="{{$students['firstname']}}"><br>
        <lable>Last name</lable>
        <br>
        <input type="text" class="form-group" name="lastname" value="{{$students['lastname']}}"><br>
        <lable>Address</lable>
        <br>
        <input type="text" class="form-group" name="address" value="{{$students['address']}}"><br>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection
