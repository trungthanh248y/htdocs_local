@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trang chu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{--                        @if(Auth::user()->role=='admin')--}}
                            <a href="{{Route('admin.index')}}" class="btn btn-info">attention post</a>
{{--                            @component('Admin.AdminSelect',compact('posts'))--}}
{{--                            @endcomponent--}}

{{--                        @endif--}}
{{--                        @if(Auth::user()->role=='users')--}}
{{--                            <p class="text text-info">Xin chao</p>--}}

{{--                        @endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
