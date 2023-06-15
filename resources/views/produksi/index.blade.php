@extends('layouts.master')
@section('sub-title' , 'Daftar Produksi')
@section('content')


    <a href="{{ route('produksi.create') }}" class="btn btn-primary">Tambahkan Produksi</a>
    <br><br>

    <table class="table table-bordered table-striped" id="example1">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Bahan Baku</th>
          <th scope="col">Tenaga Kerja</th>
          <th scope="col">Hasil Produksi</th></th>
          <th scope="col">Jumlah Produksi</th>
          <th scope="col">Tanggal Produksi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tbody>
          @foreach ($produksi as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->RBahanBaku->nama_bahan_baku }}</td>
              <td>{{ $item->RTenagaKerja->nama_tenaga_kerja }}</td>
              <td>{{ $item->RBarang->nama_barang }}</td>
              <td>{{ $item->jumlah_produksi }}</td>
              <td>{{ $item->tanggal_produksi }}</td>
              <td>
                <a class="btn btn-warning btn-sm" href="/produksi/edit/{{$item->id}}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/produksi/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection
