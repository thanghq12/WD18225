@extends('layout.main')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->price }}</td>
            <td>Action</td>
        </tr>
        @endforeach
    </table>
@endsection