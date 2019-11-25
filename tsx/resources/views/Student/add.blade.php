@extends('master')

@section('title','ADD')

@section('content')
    <a href="{{Route('index')}}" class="btn btn-success">Back home</a>
    <form action="{{Route('add')}}" method="POST">
        @csrf
        @if($mess!=null)
            <p class="text-info">Them thanh cong</p>
            @endif
        <lable>User name</lable>
        <input type="text" name="username" class="input-group">
        <lable>First name</lable>
        <input type="text" name="firstname" class="input-group">
        <lable>Last name</lable>
        <input type="text" name="lastname" class="input-group">
        <lable>Address</lable>
        <input type="text" name="address" class="input-group">
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>

    @endsection
