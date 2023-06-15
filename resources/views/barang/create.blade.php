@extends('layouts.master')
@section('content')

        <form action="/barang" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    @foreach ($kategori_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection