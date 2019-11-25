<table class="table form-group">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Major</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($ajax2 as $group)
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


  <div class="col-sm-3">
    <h2><img class="img-rounded corners" width="170px" height="150px" src="{{asset('image/'.$post->image)}}"></h2>
    </div>
    