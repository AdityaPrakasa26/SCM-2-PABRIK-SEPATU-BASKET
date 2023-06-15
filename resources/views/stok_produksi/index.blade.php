@extends('layouts.master')
@section('sub-title' , 'Daftar Stok Produksi')
@section('content')

        <a href="{{ route('stok_produksi.create') }}" class="btn btn-primary">Tambah Stok</a>
        <br><br>

    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Jumlah Yang Di Produksi</th>
                <th scope="col">Jumlah Stok Produksi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stokProduksi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang }}</td>
                <td>{{ $item->RProduksi->jumlah_produksi }}</td>
                <td>{{ $item->jumlah_stok_produksi }}</td>
                <td>
                    <a class="btn btn-warning" href="/stok-produksi/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/stok-produksi/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection