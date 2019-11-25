@extends('layouts.app')

@section('content')
<table class="table">
    @if (session('mess'))
        <p class="alert alert-success">{{ session('mess') }}</p>
    @endif
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">username</th>
        <th scope="col">phone</th>
        <th scope="col">time</th>
        <th scope="col">title</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($meetings as $meeting)
    <tbody>
        <tr>
          <th scope="row">{{ $meeting['id'] }}</th>
          <td>{{ $meeting['username'] }}</td>
          <td>{{ $meeting['phone'] }}</td>
          <td>{{ $meeting['time'] }}</td>
          <td>{{ $meeting['title'] }}</td>
          <td>{{ $meeting['describe'] }}</td>
          <td>
              <a href="{{Route('editMeeting',$meeting->id)}}" class="btn btn-info">Edit</a>

              <form action="{{Route('deletePostMeeting')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $meeting->id }}">
                <input type="submit" name="btn_sub" class="btn btn-danger" value="Delete">
              </form>
          </td>
        </tr>
    </tbody>
    @endforeach
    <div class="col-md-12">

        @if(count($meetings)>=6)
            <div class="col-sm-6 col-sm-offset-3">
                {{$meetings->links()}}
            </div>
        @else

        @endif
    </div>
  </table>
@endsection