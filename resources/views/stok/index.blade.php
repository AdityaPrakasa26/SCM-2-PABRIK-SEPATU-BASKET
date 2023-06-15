@extends('layouts.master')
@section('sub-title' , 'Daftar Stok Barang')
@section('content')



        <a href="{{ route('stok.create') }}" class="btn btn-primary">Tambah Stok</a>
        <br><br>

        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Outlet</th>
                <th scope="col">Gudang</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang }}</td>
                <td>{{ $item->jumlah_stok }}</td>
                <td>{{ $item->ROutlet->nama_outlet }}</td>
                <td>{{ $item->RGudang->nama_gudang }}</td>
                <td>
                    <a class="btn btn-warning" href="/stok/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/stok/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection