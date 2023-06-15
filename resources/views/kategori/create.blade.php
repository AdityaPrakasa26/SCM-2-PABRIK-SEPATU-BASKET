@extends('layouts.master')
@section('content')

        <form action="/kategori" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukan Nama Kategori">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection