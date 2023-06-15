@extends('layouts.master')
@section('sub-title' , 'Edit Stok Barang')
@section('content')

        <form action="/stok/update/{{$stok->id}}" method="POST" class="">
            @csrf
            @method('PUT')
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
                    <option disabled value>Pilih Gudang</option>
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
            <div class="form-group">
                <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukkan Jumlah Stok" value="{{$stok->jumlah_stok}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
