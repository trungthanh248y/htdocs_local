@extends('../master')
@section('title','student')

@section('content')
    <table class="table">
        <a href="{{Route('add')}}" class="btn btn-success">ADD NEW</a>
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">username student</th>
            <th scope="col">conunt</th>
            <th scope="col">username employ</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($students as $v)
            <tbody>
            <tr>
                <td scope="row">{{$v['id']}}</td>
                <td>{{$v['students']}}</td>
                <td>{{$v['count']}}</td>
                <td><?php echo \App\Model\Empoloyess::find($v['id_employ'])->username_emp ?></td>
                <td>
                    <a href="" class="btn btn-info">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
