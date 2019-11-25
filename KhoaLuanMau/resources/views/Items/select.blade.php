@extends('layouts.app')

@section('content')
    <table class="table">
        @if (session('mess'))
            <p class="alert alert-success">{{ session('mess') }}</p>
        @endif
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Items</th>
            <th scope="col"><a href="{{ Route('addItem') }}" class="btn btn-success">ADD</a></th>
        </tr>
        </thead>
        @foreach ($items as $item)
            <tbody>
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->item}}</td>
                <td>
                    <a href="{{ Route('editItem',$item->id) }}" class="btn btn-info">Edit</a>

                    <form action="{{ Route('deleteItem' )}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="submit" name="btn_sub" class="btn btn-danger" value="DELETE">
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection