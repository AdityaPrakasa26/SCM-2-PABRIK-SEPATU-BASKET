@extends('layouts.master')
@section('sub-title' , 'Daftar Biaya Produksi')
@section('content')

        <a href="{{ route('biaya-produksi.create') }}" class="btn btn-primary">Tambah Biaya Produksi</a>
        <br><br>

        <table class="table table-bordered table-striped" id="example1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Biaya Bahan Baku</th>
                    <th scope="col">Biaya Tenaga Kerja</th>
                    <th scope="col">Biaya Produksi</th>
                    <th scope="col">Tanggal Produksi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($biayaproduksi as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->biaya_bahan_baku }}</td>
                    <td>{{ $item->biaya_tenaga_kerja }}</td>
                    <td>{{ $item->biaya_produksi_ }}</td>
                    <td>{{ $item->RProduksi->tanggal_produksi }}</td>
                    <td>
                        <a class="btn btn-warning" href="/biaya-produksi/edit/{{$item->id}}">Edit</a>
                        <a class="btn btn-danger" href="/biaya-produksi/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@endsection