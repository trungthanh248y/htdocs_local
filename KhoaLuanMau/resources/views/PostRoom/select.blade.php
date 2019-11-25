@extends('layouts.app')

@section('content')
    <table class="table">
        @if (session('mess'))
            <p class="alert alert-success">{{ session('mess') }}</p>
        @endif
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">address</th>
            <th scope="col">acreage</th>
            <th scope="col">price</th>
            <th scope="col">item</th>
            <th scope="col">content</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach ($rooms as $room)
            <tbody>
            <tr>
                <th scope="row">{{ $room->id }}</th>
                <td>{{ $room->title}}</td>
                <td>{{ $room->address}}</td>
                <td>{{ $room->acreage}}</td>
                <td>{{ $room->describe}}</td>
                <td>
                    <?php $items=\App\Room::find($room->id)->items()->get()?>

                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-sm-6">
                                {{$item->item}}
                                <hr class="mb-4">
                            </div>
                        @endforeach
                    </div>
                </td>
                <td>
                    @if (strlen($room->content)>50)
                        <p>{{ substr($room->content,0,50)."..." }}</p>
                    @else
                        <p>{{ $room->content }}</p>
                    @endif
                </td>
                <td>
                    <img class="img-rounded corners" style="width: 300px; height:100px" src="{{ asset('images/'.$room->image) }}" alt="">
                </td>
                <td>
                    <a href="{{ Route('editPostRoom',$room->id) }}" class="btn btn-info">Edit</a>

                    <form action="{{ Route('deletePostRoom' )}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $room->id }}">
                        <input type="submit" name="btn_sub" class="btn btn-danger" value="DELETE">
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
        <div class="col-md-12">

            @if(count($rooms)>=6)
                <div class="col-sm-6 col-sm-offset-3">
                    {{$rooms->links()}}
                </div>
            @else

            @endif
        </div>
    </table>
@endsection