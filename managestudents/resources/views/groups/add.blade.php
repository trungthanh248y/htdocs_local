@extends('master')

@section('title','Add new group')

@section('content')
    <h1>ADD NEW GROUP</h1>
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ Route('storeGroup') }}" class="form-group" method="POST">
        @csrf
        <div class="form-group">
            <label for="text">Name</label>
            <input name="name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="text">Major</label>
            <input name="major" class="form-control" type="text">
        </div>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection