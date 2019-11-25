@extends('layouts.app')

@section('content')
    @if (session('mess'))
        <p class="alert alert-success">{{ session('mess') }}</p>
    @endif
    <form action="{{Route('checkEvent')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="Check Event" name="btn_sub" class="btn btn-success">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">Events</th>
                        <th scope="col">address</th>
                        <th scope="col">acreage</th>
                        <th scope="col">price</th>
                        <th scope="col">sale</th>
                        <th scope="col">item</th>
                        <th scope="col">content</th>
                        <th scope="col">Image</th>
                        <th scope="col"><a href="{{ Route('addPost') }}" class="btn btn-success">ADD</a></th>
                    </tr>
                    </thead>
                    @foreach ($posts as $post)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $post['id'] }}</th>
                            <td>{{ $post['title'] }}</td>
                            <td><input type="checkbox" name="postCheck[]" value="{{ $post['id'] }}"></td>
                            <td>{{ $post['address'] }}</td>
                            <td>{{ $post['acreage'] }}</td>
                            <td>{{ $post['describe'] }}</td>
                            <td>{{ $post['sale'] }}</td>

                            <td>
                                <?php $items=\App\Post::find($post->id)->items()->get()?>

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
                                @if (strlen($post->content)>50)
                                    <p>{{ substr($post->content,0,50)."..." }}</p>
                                @else
                                    <p>{{ $post->content }}</p>
                                @endif
                            </td>
                            <td>
                                <img class="img-rounded corners" style="width: 300px; height:100px" src="{{ asset('images/'.$post['image']) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ Route('getEdittPost',$post['id']) }}" class="btn btn-info">Edit</a>

                                <form action="{{ Route('deletePost' )}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $post['id'] }}">
                                    <input type="submit" name="btn_sub" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Posts</th>
                        <th scope="col">content</th>
                        <th scope="col">start time</th>
                        <th scope="col">end time</th>
                        <th scope="col"><a href="{{Route('addEvent')}}" class="btn btn-success">ADD</a></th>
                    </tr>
                    </thead>
                    @foreach ($events as $event)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $event['id'] }}</th>
                            <td>{{ $event['name'] }}</td>
                            <td><input type="checkbox" name="eventCheck[]" value="{{ $event['id'] }}"></td>
                            <td>{{ $event['start_time'] }}</td>
                            <td>{{ $event['end_time'] }}</td>
                            <td>
                                @if (strlen($event->content)>50)
                                    <p>{{ substr($event->content,0,50)."..." }}</p>
                                @else
                                    <p>{{ $event->content }}</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{Route('getEdittEvent',$event->id)}}" class="btn btn-info">Edit</a>

                                <form action="{{Route('deleteEvent')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $event['id'] }}">
                                    <input type="submit" name="btn_sub" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
@endsection