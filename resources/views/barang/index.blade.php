@extends('layouts.master')
@section('sub-title' , 'Daftar Barang')
@section('content')


    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambahkan Barang</a>
    <br><br>

    <table class="table table-bordered table-striped" id="example1">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Kategori Barang</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tbody>
          @foreach ($barang as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
              <td>{{ $item->nama_barang }}</td>
              <td>
                <a class="btn btn-warning btn-sm" href="/barang/edit/{{$item->id}}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/barang/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

@endsection
