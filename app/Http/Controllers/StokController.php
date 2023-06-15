<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Outlet;
use App\Models\StokBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stok = StokBarang::with('RBarang', 'ROutlet', 'RGudang')->paginate(5);

        return view('stok.index', [
            'stok' => $stok,
        ]);
    }

    public function addView()
    {
        $outlet_ = Outlet::all();
        $barang_ = Barang::all();
        $gudang_ = Gudang::all();
        return view('stok.create', compact('outlet_', 'barang_', 'gudang_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_barang' => $request->input('id_barang'),
            'id_outlet' => $request->input('id_outlet'),
            'id_gudang' => $request->input('id_gudang'),
            'jumlah_stok' => $request->input('jumlah_stok'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        StokBarang::create($data);

        return redirect()->route('stok.index');
    }

    public function edit($id)
    {
        $outlet_ = Outlet::all();
        $gudang_ = Gudang::all();
        $barang_ = Barang::all();
        $stok = StokBarang::findOrFail($id);
        return view('stok.edit', compact('stok', 'barang_', 'outlet_', 'gudang_'));
    }

    public function update(Request $request, $id)
    {
        $stok = StokBarang::findOrFail($id);
        $stok->jumlah_stok = $request->jumlah_stok;
        $stok->save();

        return redirect('/stok');
    }

    public function destroy($id)
    {
        $stok = StokBarang::findOrFail($id);
        $stok->delete();
        return redirect('/stok');
    }
}
