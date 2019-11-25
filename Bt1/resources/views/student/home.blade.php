@extends('.master')
@section('title','home')

@section('content')
    <a href="{{Route('createStudent')}}" class="btn btn-success">ADD</a>
    @if(session('status'))
        <p class="text-success">{{session('status')}}</p>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($students as $v)
            <tbody>
            <tr>
                <th scope="row">{{$v['id']}}</th>
                <td>{{$v['username']}}</td>
                <td>{{$v['firstname']}}</td>
                <td>{{$v['lastname']}}</td>
                <td>{{$v['address']}}</td>
                <td>
                    <a href="{{Route('updateStudent',$v['id'])}}" class="btn btn-info">Edit</a>
                    <a href="{{Route('destroyStudent',$v['id'])}}" class="btn btn-danger">Delete</a>
                    <a href="javascrip/," class="btn btn-danger" id="xoa">Xoa</a>
                    <script>
                        {{--$(document).ready(function () {--}}
                            {{--var xoa=$(#xoa).val();--}}
                            {{--$.get("{{Route('destroyStudent')}}",{id:xoa},function (data) {--}}
                                {{--data.hidden();--}}
                            {{--})--}}
                        {{--})--}}

                    </script>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>

@endsection
