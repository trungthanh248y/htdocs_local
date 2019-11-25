<a href="{{ Route('addStudent') }}" class="btn btn-success">ADD STUDENTS</a>
<table class="table form-group">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">User name</th>
        <th scope="col">Full name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Groups</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach ($students as $student)
    <tbody>
        <tr>
            <th scope="row">{{ $student['id'] }}</th>
            <td>{{ $student['username'] }}</td>
            <td>{{ $student['fullname'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['address'] }}</td>
            <td>{{ $student['groups_id'] }}</td>
            <td>
                <a href="{{ Route('getEditStudent',$student['id']) }}" class="btn btn-info">Edit</a>
                <form action="{{ Route('deleteStudent') }}" method="post">
                <input type="hidden" name="id_student" value="{{ $student['id'] }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
