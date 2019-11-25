@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('itemIndex')}}" class="btn btn-success">BACK HOME</a>
                <h1>ADD Items</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('addItemSub')}}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">Items</label>
                    <input type="text" name="item" class="form-control">
                    <input type="submit" value="Submit" class="btn btn-light">
                </form>
            </div>
        </div>
    </div>
@endsection