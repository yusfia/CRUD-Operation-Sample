@extends('page_template')
@section('content')
    <h1>Hello, {{$user->name}} [{{$user->id}}]</h1>
    <a href="{{route('address.add')}}" class="btn btn-primary">Tambah Alamat Baru</a>
    <table class="table">
        <thead>
        <tr>
            <th>City</th>
            <th>Street</th>
            <th>Postal Code</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($addresses as $item)
            <tr>
                <td>{{$item->city}}</td>
                <td>{{$item->street}}</td>
                <td>{{$item->postal_code}}</td>
                <td>
                    <a href="{{route('address.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{route('address.delete', $item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('abc')
    <h1>Pemrograman Web Lanjut</h1>
@endsection
