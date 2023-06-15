<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategori = KategoriBarang::paginate(5);

        return view('kategori.index', [
            'kategori' => $kategori,
        ]);
    }

    public function addView()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_kategori_barang' => $request->input('nama_kategori_barang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        KategoriBarang::create($data);

        return redirect()->route('kategori.index');
    }

    public function edit($id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        $kategori->nama_kategori_barang = $request->nama_kategori_barang;
        $kategori->save();

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori');
    }
}
