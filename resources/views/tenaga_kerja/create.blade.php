@extends('layouts.master')
@section('sub-title' , 'Tambah Tenaga Kerja')
@section('content')

        <form action="/tenaga-kerja" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="nama_tenaga_kerja" class="form-label">Nama Tenaga Kerja</label>
                <input type="text" class="form-control" id="nama_tenaga_kerja" name="nama_tenaga_kerja" placeholder="Masukan Nama Tenaga Kerja">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('tenaga_kerja.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection