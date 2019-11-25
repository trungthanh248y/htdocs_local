@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('selectPost')}}" class="btn btn-success">BACK HOME</a>
                <h1>EDIT POST</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('editPost',$posts['id']) }}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">title</label>
                    <input type="text" name="title" class="form-control" value="{{ $posts['title'] }}">
                    <label for="text">address</label>
                    <input type="text" name="address" class="form-control" value="{{ $posts['address'] }}">
                    <label for="text">acreage</label>
                    <input type="text" name="acreage" class="form-control" value="{{ $posts['acreage'] }}">
                    <label for="text">price</label>
                    <input type="text" name="describe" class="form-control" value="{{ $posts['describe'] }}">
                    <label for="text">sale</label>
                    <input type="text" name="sale" class="form-control" value="{{ $posts['sale'] }}">

{{--                    <label for="text">item</label>--}}
{{--                    <input type="text" name="item" class="form-control" value="{{ $posts['item'] }}">--}}
                    <hr class="mb-4">
                    <label for="text">Items</label>
                    <hr class="mb-4">
                    <div class="row">
                        @foreach($items as $item)
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
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $posts['content'] }}</textarea>
                    <img class="img-rounded corners" style="width: 300px; height:200px" src="{{ asset('images/'.$posts['image'])}}" alt="" ><br>
                    Image: <input type="file" name="image" value="Image"><br>
                    <input type="submit" name="btn_sub" class="btn btn-light">
                </form>
            </div>
        </div>
    </div>
@endsection