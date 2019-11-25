@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ Route('selectPost')}}" class="btn btn-success">BACK HOME</a>
                <h1>ADD EVENTS</h1>
                @if (session('mess'))
                    <p class="alert alert-success">{{ session('mess') }}</p>
                @endif
                @if (count($errors)!=0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ Route('addpEvent') }}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <label for="text">name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="text">content</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <label for="text">start_time</label>
                    <input type="text" name="start_time" class="form-control">
                    <label for="text">end_time</label>
                    <input type="text" name="end_time" class="form-control">
                    <input type="submit" name="btn_sub" class="btn btn-light">
                </form>
            </div>
        </div>
    </div>
@endsection