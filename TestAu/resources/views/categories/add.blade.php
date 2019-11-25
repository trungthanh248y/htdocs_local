@extends('layouts.app')

@section('content')
    <h1>Add Category</h1>
    <form action="{{Route('categoryAddSub')}}" method="post" class="">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name"><br>
        <input type="submit" value="ADD">

        @foreach($posts as $post)
            <p><lable><input type="checkbox" name="checkPost[]" value="{{$post->id}}">{{$post['title']}}</lable></p>
        @endforeach


    </form>
@endsection