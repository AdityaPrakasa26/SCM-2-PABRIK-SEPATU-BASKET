@extends('layouts.master')
@section('sub-title' , 'Tambah Stok Barang')
@section('content')

        <form action="/stok" method="POST" class="">
            @csrf
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
                <label for="id_gudang" class="form-label">Gudang</label>
                <select class="form-control select2" style="width: 100%;" name="id_gudang" id="id_gudang">
                    <option disabled value>Pilih Kategori Barang</option>
                    @foreach ($gudang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_gudang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet">
                    <option disabled value>Pilih Outlet</option>
                    @foreach ($outlet_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukan Jumlah Stok">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('stok.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>
    </div>
@endsection