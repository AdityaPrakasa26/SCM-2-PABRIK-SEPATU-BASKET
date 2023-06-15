@extends('layouts.master')
@section('sub-title' , 'Daftar Outlet')
@section('content')


        <a href="{{ route('outlet.create') }}" class="btn btn-primary">Tambah Outlet</a>
        <br><br>

        <table class="table table-bordered table-striped" id="example1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Outlet</th>
                    <th scope="col">Alamat Outlet</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($outlet as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_outlet }}</td>
                    <td>{{ $item->alamat_outlet }}</td>
                    <td>
                        <a class="btn btn-warning" href="/outlet/edit/{{$item->id}}">Edit</a>
                        <a class="btn btn-danger" href="/outlet/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@endsection