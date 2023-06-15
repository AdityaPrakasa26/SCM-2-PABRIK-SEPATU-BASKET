@extends('layouts.master')
@section('sub-title' , 'Edit Outlet')
@section('content')

        <form action="/outlet/update/{{$outlet->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukan Nama Outlet" value="{{$outlet->nama_outlet}}">
            </div>
            <div class="mb-3">
                <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
                <input type="text" class="form-control" id="alamat_outlet" name="alamat_outlet" placeholder="Masukan Alamat Outlet" value="{{$outlet->alamat_outlet}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('outlet.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection