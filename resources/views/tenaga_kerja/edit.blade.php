@extends('layouts.master')
@section('sub-title' , 'Edit Tenaga Kerja')
@section('content')

        <form action="/tenaga-kerja/update/{{$tenaga_kerja->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_tenaga_kerja" class="form-label">Nama Tenaga Kerja</label>
                <input type="text" class="form-control" id="nama_tenaga_kerja" name="nama_tenaga_kerja" placeholder="Masukkan Nama Tenaga Kerja" value="{{$tenaga_kerja->nama_tenaga_kerja }}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
