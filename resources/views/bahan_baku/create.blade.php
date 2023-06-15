@extends('layouts.master')

@section('content')

        <form action="/bahan-baku" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="nama_bahan_baku" class="form-label">Nama Bahan Baku</label>
                <input type="text" class="form-control" id="nama_bahan_baku" name="nama_bahan_baku" placeholder="Masukkan Nama Bahan Baku">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('bahan_baku.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection
