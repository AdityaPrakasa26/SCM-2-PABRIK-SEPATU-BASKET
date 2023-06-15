@extends('layouts.master')
@section('sub-title' , 'Edit Stok Produksi')
@section('content')

        <form action="/stok-produksi/update/{{$stokProduksi->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_produksi" class="form-label">Jumlah Produksi</label>
                <select class="form-control select2" style="width: 100%;" name="id_produksi" id="id_produksi">
                    <option disabled value>Pilih Jumlah Produksi</option>
                    @foreach ($produksi_ as $item)
                        <option value="{{ $item->id }}">{{ $item->jumlah_produksi }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_barang" class="form-label">Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Barang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_stok_produksi" class="form-label">Jumlah Stok Produksi</label>
                <input type="text" class="form-control" id="jumlah_stok_produksi" name="jumlah_stok_produksi" placeholder="Masukkan Stok Produksi" value="{{$stokProduksi->jumlah_stok_produksi}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
