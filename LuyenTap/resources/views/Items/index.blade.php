@extends('master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col"><a href="#" class="btn btn-info">ADD</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
{{--                <td>--}}
{{--                    <div class="row">--}}
{{--                @foreach($items as $item)--}}
{{--                    <div class="col-sm-4">--}}
{{--                    <p><lable><input type="checkbox" name="item[]" value="{{$item->id}}"--}}
{{--                            @if(in_array($item->id,$subject_id)){{"checked='checked'"}} @endif--}}
{{--                            >{{$item->item}}</lable></p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                    </div>--}}
{{--                </td>--}}
                <td><a href="#" class="btn btn-success">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection