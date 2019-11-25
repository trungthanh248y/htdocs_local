@extends('master')

@section('content')
    <div><h1 class="fa fa-align-center">Home</h1></div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5">
                <a href="#" class="btn btn-success">ADD</a>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name employess</th>
                        <th scope="col">Rows</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($employ as $emp)
                    <tbody>
                        <tr>
                        <th scope="row">{{$emp['id']}}</th>
                          <td>{{$emp['name_employess']}}</td>
                          <td>{{$emp['Rows']}}</td>
                          <td>
                            <a href="#" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
            <div class="col-md-7">
                <a href="#" class="btn btn-success">ADD</a>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">email</th>
                        <th scope="col">username</th>
                        <th scope="col">password</th>
                        <th scope="col">Rows</th>
                        <th scope="col">employess_id</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($student as $stu)
                    <tbody>
                        <tr>
                        <th scope="row">{{$stu['id']}}</th>
                          <td>{{$stu['email']}}</td>
                          <td>{{$stu['username']}}</td>
                          <td>{{$stu['password']}}</td>
                          <td>{{$stu['Rows']}}</td>
                          {{-- <td>{{ $stu['employess_id'] }}</td> --}}
                          <td>
                            <select>
                                @foreach ($employ as $emp1)
                                  <option name="{{$emp1['id']}}">{{$emp1['name_employess']}}</option>
                                @endforeach
                            </select>
                          </td>
                          <td>
                            <a href="#" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
@endsection