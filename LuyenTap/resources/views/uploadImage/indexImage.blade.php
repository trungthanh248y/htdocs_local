@extends('master')

@section('content')
        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">file name</th>
                  </tr>
                </thead>
            @foreach ($image as $item)
                <tbody>
                <tr>
                    <th scope="row">{{ $item['id'] }}</th>
                    <td>{{ $item['filename'] }}</td>
                </tr>
                </tbody>
            @endforeach
              </table>
        </div>
@endsection