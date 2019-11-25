@extends('master')
@section('title','student')
@section('content')
    <a href="{{Route('index')}}" class="btn btn-success">Index</a>
    <form action="{{Route('add')}}" method="post" class="form-group">
        @csrf
        <label class="center">Username student</label><br>
        <input type="text" name="username" class="form-group"/><br>
        <label>Count</label><br>
        <input type="text" name="count" class="form-group"><br>
        <label>Username employess</label><br>
        <select name="id_employ">
            {{--Lấy name=id_employ về bên kia, còn nếu có nhiều thì $request->name==value--}}
            @foreach($employ as $v)
                <option value="{{$v['id']}}">{{$v['username_emp']}}</option>
            @endforeach
        </select><br>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection
