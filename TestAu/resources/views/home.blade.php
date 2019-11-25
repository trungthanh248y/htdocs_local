@extends('layouts.app')

@section('content')
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</head>

<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            @yield('content')
                        </div>
                        <div class="col-md-4 order-md-2 mb-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Menu</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <a href="{{Route('categoryIndex')}}" class="btn btn-info">Category</a>
                                    </p>

                                    <p>
                                        <a href="{{Route('sendEmail')}}" class="btn btn-info">Send Email</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
