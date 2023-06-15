@extends('gudang.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Kategori</h4>
        <form action="/kategori/update/{{$kategori->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukkan Nama Kategori" value="{{$kategori->nama_kategori_barang}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
