@extends('master')
@section('title','Create new student')
@section('content')
    <div class="container">
        <h3>ADD NEW STUDENT</h3>
        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{  Route('storeStudent')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="text">User name</label>
                <input name="username" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="text">Full name</label>
                <input name="fullname" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="text">Email</label>
                <input name="email" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="text">Address</label>
                <input name="address" class="form-control" type="text">
            </div>
            <select name="groups_id">
                    <option value="">Select group</option>
                @foreach ($groups as $group)
                    <option value="{{ $group['id'] }}" >{{ $group['name'] }}</option>
                @endforeach
            </select>
            <input type="submit" name="btn_sub" class="btn btn-success">
        </form>
    </div>
@endsection