@extends('layouts.app')

@section('content')
<h1 class="text-md-center">Select Categories</h1>
<form action="{{Route('checkCategory')}}" method="post">
    @csrf
    <input type="submit" value="Category" class="btn btn-info">
    <div class="row">
        <div class="col-sm-5">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>posts</th>
                    <th scope="col">name</th>
                    <th><a href="#" class="btn btn-info">ADD</a></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category['id']}}</th>
                            <th><input type="checkbox" name="cateCheck[]" value="{{$category['id']}}"></th>
                            <td><a href="#">{{$category['name']}}</a></td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-7">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>category</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th><a href="#" class="btn btn-info">ADD</a></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post['id']}}</th>
                            <th><input type="checkbox" value="{{$post['id']}}" name="postCheck[]"></th>
                            <td><a href="#">{{$post['title']}}</a></td>
                            <td>{{$post['content']}}</td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</form>
@endsection