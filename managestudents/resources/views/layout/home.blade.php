@extends('master')
@section('title','Manage Student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <h1>Groups</h1>
              <a href="{{ Route('addGroup') }}" class="btn btn-success">ADD GROUP</a>
              @if (session('mess')!=null)
                  <p class="alert alert-success">{{ session('mess') }}</p>
              @else
              @if (session('messDelete'))
                  <p class="alert alert-success">{{ session('messDelete') }}</p>
              @endif
              @endif
              <div class="showGroup">
                <table class="table form-group">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Major</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($groups as $group)
                    <tbody>
                        <tr>
                          <th scope="row">{{ $group['id'] }}</th>
                          <td><a href="javascript:;" class="manege_group" group_id="{{ $group['id'] }}">{{ $group['name'] }}</a></td>
                          <td>{{ $group['major'] }}</td>
                          <td>
                              <a href="{{ Route('getEditGroup',$group['id']) }}" class="btn btn-info">Edit</a>
                              <form action="{{ Route('deleteGroup') }}" method="post">
                                <input type="hidden" name="id_group" value="{{ $group['id'] }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Delete" class="btn btn-danger">
                              </form> 
                          </td>
                        </tr>
                      </tbody>
                    @endforeach
                  </table>
              </div>
            </div>
            <div class="col-md-1">
                
            </div>
            <div class="col-md-7">
                <h1>Student</h1>
                    @if (session('messe'))
                        <p class="alert alert-success">{{ session('messe') }}</p>
                    @endif
                    @if (session('deleteStudent')!=null)
                        <p class="alert alert-success">{{ session('deleteStudent') }}</p>
                    @endif

            <div id="showGroupStudent">
                <a href="{{ Route('addStudent') }}" class="btn btn-success">ADD STUDENTS</a><br>
                <form action="{{ Route('Seesion') }}" method="post">
                  @csrf
                  <select name="groups_id" class="form-control">
                    <option value="">Select group</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group['id'] }}" >{{ $group['name'] }}</option>
                    @endforeach
                  </select>
                  <input type="submit" name="btn_sub" class="btn btn-light" id="showStudent">
                  <table class="table form-group">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Check Group</th>
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
                            <th><input type="checkbox" name="check_group[]" value="{{ $student['id'] }}"></th>
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
                </form>
              </div>
            </div>
        </div>

        {{-- <div class="danhsach"></div>
        <div class="xemthem">Xem them</div> --}}

    </div>
    {{-- "_token": "{{ csrf_token() }}", --}}
    {{-- json --}}
    <script type="text/javascript">
      var i = 0;
      $(document).ready(function () {
        $('.manege_group').click(function(){
          var id_group=$(this).attr('group_id');
          // alert(id_group);
          $.ajax({
            type:'GET',
            url:'group/ajaxStudent',
            data:{id:id_group},
            dataType:'html',
            success: function(data) {
            }
          }).done(function(data){
            $('#showGroupStudent').html(data);
          });
        });
        // $('#showStudent').click(function(){
        //   alert('aa');
        // });
        //Phân trang
        // $('.xemthem').click(function(){
        //   i++;
        //   $.ajax({
        //     type:"get",
        //     url:"group/ajaxStudent2",
        //     data:{trang:i},
        //     success:function(data){
        //       $(".danhsach").append(data);
        //     }
        //   })
        // });
      });
    </script>
@endsection
