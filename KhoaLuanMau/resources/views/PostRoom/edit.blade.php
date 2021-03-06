@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('indexPostRomm')}}" class="btn btn-success">BACK HOME</a>
                <h1>EDIT POST</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('editPostRoomSubmit',$rooms['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">title</label>
                    <input type="text" name="title" class="form-control" value="{{ $rooms['title'] }}">
                    <label for="text">address</label>
                    <input type="text" name="address" class="form-control" value="{{ $rooms['address'] }}">
                    <label for="text">acreage</label>
                    <input type="text" name="acreage" class="form-control" value="{{ $rooms['acreage'] }}">
                    <label for="text">price</label>
                    <input type="text" name="describe" class="form-control" value="{{ $rooms['describe'] }}">

{{--                    <label for="text">item</label>--}}
{{--                    <input type="text" name="item" class="form-control" value="{{ $rooms['item'] }}">--}}

                    <hr class="mb-4">
                    <label for="text">Items</label>
                    <hr class="mb-4">
                    <div class="row">
                        @foreach($temp as $item)
                            <div class="col-sm-4">
                                <p><lable><input type="checkbox" name="item[]" value="{{$item->id}}"
                                        @if(in_array($item->id,$sub_temps)){{"checked='checked'"}}
                                                @endif
                                        >{{$item->item}}</lable></p>
                            </div>
                        @endforeach
                    </div>
                    <hr class="mb-4">

                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $rooms['content'] }}</textarea>
                    <img class="img-rounded corners" style="width: 300px; height:200px" src="{{ asset('images/'.$rooms['image'])}}" alt="" ><br>
                    Image: <input type="file" name="image" value="Image"><br>
                    <input type="submit" name="btn_sub" class="btn btn-light" value="Update Post">
                </form>
            </div>
        </div>
    </div>
@endsection