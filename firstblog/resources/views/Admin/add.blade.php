@extends('layouts.app')

@section('content')
    <a href="{{Route('admin.index')}}" class="btn btn-success">BACK HOME</a>
    <h1 class="text-center">ADD POSTS</h1>
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <p class="text text-danger">{{$error}}</p>
        @endforeach
    @endif
    @if(session('mess')!=null)
        <p class="text-info">{{session('mess')}}</p>
    @endif
    <form action="{{Route('addSubmit')}}" method="post" enctype="multipart/form-data" class="form-group">
        @csrf
        <th scope="col">Title</th>
        <input type="text" name="title" class="form-control">
        <th scope="col">Content</th>
        <input type="text" name="content" class="form-control">
        <lable for="text">Author id</lable>
        <input type="text" name="author_id" class="form-control">
        <th scope="col">Image</th>
        <input type="file" name="image"><br>
        <input type="submit" name="btn_sub" class="btn btn-success">
    </form>
@endsection