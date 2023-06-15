@extends('layouts.master')
@section('sub-title' , 'Daftar Tenaga Kerja')
@section('content')

        <a href="{{ route('tenaga_kerja.create') }}" class="btn btn-primary">Tambah Tenaga Kerja</a>
        <br><br>

    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Tenaga Kerja</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tenaga_kerja as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_tenaga_kerja }}</td>
                <td>
                    <a class="btn btn-warning" href="/tenaga-kerja/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/tenaga-kerja/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection