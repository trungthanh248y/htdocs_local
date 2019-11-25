@extends('master')

@section('title','Edit student')

@section('content')
    <h1>EDIT STUDENT</h1>
    <a href="{{ Route('home') }}" class="btn btn-light">BACK HOME</a>
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    @if (session('messStudent')!=null)
        <p class="alert alert-success">{{ session('messStudent') }}</p>
    @endif
    <form action="{{ Route('editStudent',$students['id']) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="text">User name</label>
            <input name="username" class="form-control" type="text" value="{{ $students['username'] }}">
        </div>
        <div class="form-group">
            <label for="text">Full name</label>
            <input name="fullname" class="form-control" type="text" value="{{ $students['fullname'] }}">
        </div>
        <div class="form-group">
            <label for="text">Email</label>
            <input name="email" class="form-control" type="text" value="{{ $students['email'] }}">
        </div>
        <div class="form-group">
            <label for="text">Address</label>
            <input name="address" class="form-control" type="text" value="{{ $students['address'] }}">
        </div>
        <select name="groups_id">
                <option value="">Select group</option>
            @foreach ($groups as $group)
                <option value="{{ $group['id'] }}" >{{ $group['name'] }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <lable>subject</lable>
        @foreach($subjects as $subject)
            <p><lable><input type="checkbox" value="{{$subject->id}}" @if(in_array($subject->id,$subjects_id)){{"checked=checked"}} @endif name="subject[]">{{$subject->name}}</lable></p>
        @endforeach
        <br>
        <br>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection