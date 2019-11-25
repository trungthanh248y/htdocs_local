@extends('layouts.app')

@section('content')

    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <table class="table">
                   <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Title</th>
                       <th scope="col">Content</th>
                       <th scope="col">Author_id</th>
                       <th scope="col">Image</th>
                       <th scope="col"><a href="{{Route('add')}}" class="btn btn-success">ADD</a></th>
                   </tr>
                   </thead>
                   @foreach($posts as $post)
                       <tbody>
                       <tr>
                               <th scope="row">{{$post['id']}}</th>
                               <td>{{$post['title']}}</td>
                               <td>{{$post['content']}}</td>
                               <td>{{$post['author_id']}}</td>
                               <td><img src="{{asset('image/'.$post['image'])}}" style="height:30px" alt="Smiley face"></td>
                               <td>
                                   <a href="#" class="btn btn-info">Edit</a>
                                   <form action="{{Route('delete')}}" method="post">
                                       @csrf
                                       <input type="hidden" name="id" value="{{$post['id']}}">
                                       <input type="submit" name="btn_sub" value="Delete" class="btn btn-danger">
                                   </form>
                               </td>
                       </tr>
                       </tbody>
                   @endforeach
               </table>
           </div>
       </div>
    </div>
@endsection
