    <table class="table form-group">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Major</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        {{-- @foreach ($groups as $group) --}}
        <tbody>
            <tr>
              <th scope="row">{{ $groups['id'] }}</th>
              <td><a href="javascript:;" class="manege_group" group_id="{{ $groups['id'] }}">{{ $groups['name'] }}</a></td>
              <td>{{ $groups['major'] }}</td>
              <td>
                  <a href="{{ Route('getEditGroup',$groups['id']) }}" class="btn btn-info">Edit</a>
                  <form action="{{ Route('deleteGroup') }}" method="post">
                    <input type="hidden" name="id_group" value="{{ $groups['id'] }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </form> 
              </td>
            </tr>
          </tbody>
        {{-- @endforeach --}}
      </table>
