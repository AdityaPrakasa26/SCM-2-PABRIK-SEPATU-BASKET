@extends('layouts.master')
@section('sub-title' , 'Daftar Kategori')
@section('content')


        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
        <br><br>

    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kategori_barang }}</td>
                <td>
                    <a class="btn btn-warning" href="/kategori/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/kategori/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
