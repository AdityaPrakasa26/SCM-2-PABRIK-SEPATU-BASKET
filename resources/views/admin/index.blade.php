@extends('layouts.master')
@section('sub-title' , 'Daftar Pengguna')
@section('content')

        {{-- <a href="{{ route('bahan_baku.create') }}" class="btn btn-primary">Tambah Bahan Baku</a> --}}
        <br><br>

    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    {{-- <a class="btn btn-warning" href="/bahan-baku/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/bahan-baku/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
