@extends('../master')

@section('title','Show')

@section('content')
    <a class="btn btn-success" href="{{Route('add')}}">ADD NEWS</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $v)
            <tr>
                <th scope="row">{{$v['id']}}</th>
                <td>{{$v['username']}}</td>
                <td>{{$v['firstname']}}</td>
                <td>{{$v['lastname']}}</td>
                <td>{{$v['address']}}</td>
                <td>
                    <a class="btn btn-info" href="{{@action('HomeController@edit',$v->id)}}">Edit</a>
                    {{--chú ý @ thay cho truy vấn php, nấy về link Chuuyển trang và id của nó --}}
                    <a class="btn btn-danger" href="{{@Route('delete',$v['id'])}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
