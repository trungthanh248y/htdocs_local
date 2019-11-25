@extends('layou.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Dang Ky</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-7 col-md-offset-2">
                <form action="{{Route('postRegister')}}" method="post">
                    @csrf()

                    <div class="form-group">
                        <label for="text">firstname</label><br>
                        <input type="text" class="form-control" name="firstname" placeholder="firstname">
                    </div>

                    <div class="form-group">
                        <label for="text">lastname</label><br>
                        <input type="text" class="form-control" name="lastname" placeholder="lastname">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Nhap mail">
                    </div>
                    
                    <div class="form-group">
                        <label for="Password">Password</label><br>
                        <input type="password" class="form-control" name="password" placeholder="Nhap Password">
                    </div>
                    
                    <div class="form-group">
                        <label for="Password">Nhap lai Password</label><br>
                        <input type="password" class="form-control" name="password_confirm" placeholder="Nhap lai Password">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Dang Ky</button>
                </form>
            </div>
        </div>
    </div>
@endsection
