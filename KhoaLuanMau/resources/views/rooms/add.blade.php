@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('selectRoom')}}" class="btn btn-success">BACK HOME</a>
                <h1>ADD ROOM</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('addRoomSubmit')}}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">title</label>
                    <input type="text" name="title" class="form-control">
                    <label for="text">address</label>
                    <input type="text" name="address" class="form-control">
                    <label for="text">acreage</label>
                    <input type="text" name="acreage" class="form-control">
                    <label for="text">price</label>
                    <input type="text" name="describe" class="form-control">


{{--                    <label for="text">Items</label>--}}
{{--                    <input type="text" name="item" class="form-control">--}}

                    <hr class="mb-4">
                    <label for="text">Items</label>
                    <hr class="mb-4">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-sm-4">
                                <p><lable><input type="checkbox" name="item[]" value="{{$item->id}}">{{$item->item}}</lable></p>
                            </div>
                        @endforeach
                    </div>
                    <hr class="mb-4">

                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    Image: <input type="file" name="image" value="Image"><br>
                    <input type="submit" name="btn_sub" class="btn btn-light">
                </form>
            </div>
        </div>
    </div>
@endsection