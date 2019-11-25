@extends('master')

@section('title','Edit')

@section('content')
    <a href="{{Route('index')}}" class="btn btn-success">Back home</a>
    @if($mess!=null)
        <p class="text-info">Sua thanh cong</p>
        @endif
    <form action="{{Route('edit',$student->id)}}" method="POST">
        {{--Nếu bị lỗi thiếu prameter thì: nhớ chuyển $student->id vào trong Route--}}
        @csrf
        <lable>User name</lable>
        <input type="text" name="username" class="input-group" placeholder="{{$student->username}}">
        <lable>First name</lable>
        <input type="text" name="firstname" class="input-group" placeholder="{{$student->firstname}}">
        <lable>Last name</lable>
        <input type="text" name="lastname" class="input-group" placeholder="{{$student->lastname}}">
        <lable>Address</lable>
        <input type="text" name="address" class="input-group" placeholder="{{$student->address}}">
        <input type="submit" name="btn-sub" class="btn btn-success">
    </form>
    @endsection
