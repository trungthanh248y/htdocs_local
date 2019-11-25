@extends('layou.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Dang Nhap</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-7 col-md-offset-2">
                <form action="{{Route('postLogin')}}" method="post">
                    @csrf()
                    <div class="form-group">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Nhap mail">
                    </div>
                    
                    <div class="form-group">
                        <label for="Password">Password</label><br>
                        <input type="password" class="form-control" name="password" placeholder="Nhap Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember">Save
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Dang Nhap</button>
                </form>
            </div>
        </div>
    </div>
@endsection
