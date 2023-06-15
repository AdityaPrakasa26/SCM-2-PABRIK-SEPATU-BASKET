@extends('layouts.master')
@section('sub-title' , 'Tambah Produksi')
@section('content')

        <form action="/produksi" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="id_bahan_baku" class="form-label">Bahan</label>
                <select class="form-control select2" style="width: 100%;" name="id_bahan_baku" id="id_bahan_baku">
                    <option disabled value>Pilih Bahan Baku</option>
                    @foreach ($bahan_baku as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bahan_baku }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_tenaga_kerja" class="form-label">Tenaga Kerja</label>
                <select class="form-control select2" style="width: 100%;" name="id_tenaga_kerja" id="id_tenaga_kerja">
                    <option disabled value>Pilih Tenaga Kerja</option>
                    @foreach ($tenaga_kerja as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_tenaga_kerja }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_barang" class="form-label">Hasil Produksi</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Hasil Produksi</option>
                    @foreach ($barang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_produksi" class="form-label">Jumlah Produksi</label>
                <input type="text" class="form-control" id="jumlah_produksi" name="jumlah_produksi" placeholder="Masukan Jumlah Produksi">
            </div>
            <div class="form-group">
                <label for="tanggal_produksi" class="form-label">Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggal_produksi" name="tanggal_produksi" placeholder="Masukan Tanggal Produksi">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('produksi.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection