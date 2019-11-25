@extends('master')
@section('content')
    <form action="{{ Route('stortUpLoadImage') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <label for="image">Up Load Image</label><br> 
        Image: <input type="file" name="filename" class="form-control">
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection