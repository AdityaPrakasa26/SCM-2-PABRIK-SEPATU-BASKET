@extends('layouts.master')
@section('sub-title' , 'Edit Biaya Produksi')
@section('content')

        <form action="/biaya-produksi/update/{{$biayaproduksi->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="biaya_bahan_baku" class="form-label">Biaya Bahan Baku</label>
                <input type="text" class="form-control" id="biaya_bahan_baku" name="biaya_bahan_baku" placeholder="Masukkan Biaya Bahan Baku" value="{{$biayaproduksi->biaya_bahan_baku}}">
            </div>
            <div class="form-group">
                <label for="biaya_tenaga_kerja" class="form-label">Biaya Tenaga Kerja</label>
                <input type="text" class="form-control" id="biaya_tenaga_kerja" name="biaya_tenaga_kerja" placeholder="Masukkan Biaya Tenaga Kerja" value="{{$biayaproduksi->biaya_tenaga_kerja}}">
            </div>
            <div class="form-group">
                <label for="biaya_produksi_" class="form-label">Biaya Produksi</label>
                <input type="text" class="form-control" id="biaya_produksi_" name="biaya_produksi_" placeholder="Masukkan Biaya Produksi" value="{{$biayaproduksi->biaya_produksi_}}">
            </div>
            <div class="form-group">
                <label for="id_produksi" class="form-label">Tanggal Produksi</label>
                <select class="form-control select2" style="width: 100%;" name="id_produksi" id="id_produksi">
                    <option disabled value>Pilih Tanggal Produksi</option>
                    @foreach ($produksi_ as $item)
                        <option value="{{ $item->id }}">{{ $item->tanggal_produksi }}></option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
