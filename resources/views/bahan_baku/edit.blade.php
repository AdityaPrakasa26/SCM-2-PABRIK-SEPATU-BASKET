@extends('layouts.master')
@section('sub-title' , 'Edit Bahan Baku')
@section('content')

        <form action="/bahan-baku/update/{{$bahan_baku->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_bahan_baku" name="nama_bahan_baku" placeholder="Masukkan Nama Bahan Baku" value="{{$bahan_baku->nama_bahan_baku}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
