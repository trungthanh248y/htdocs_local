@extends('master')

@section('title','Edit group')

@section('content')
    <h1>EDIT GROUP</h1>
    <a href="{{ Route('home') }}" class="btn btn-light">BACK HOME</a>
    @if (session('edit')!=null)
        <p class="alert alert-success">{{ session('edit') }}</p>
    @endif
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ Route('EditGroup',$groups['id']) }}" class="form-group" method="POST">
        @csrf
        <div class="form-group">
            <label for="text">Name</label>
            <input name="name" class="form-control" type="text" value="{{ $groups['name'] }}">
        </div>
        <div class="form-group">
            <label for="text">Major</label>
            <input name="major" class="form-control" type="text" value="{{ $groups['major'] }}">
        </div>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection