<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Produksi;
use App\Models\StokProduksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StokProduksiController extends Controller
{
    public function index()
    {
        $stokProduksi = StokProduksi::with('RProduksi', 'RBarang')->paginate(5);

        return view('stok_produksi.index', [
            'stokProduksi' => $stokProduksi,
        ]);
    }

    public function addView()
    {
        $produksi_ = Produksi::all();
        $barang_ = Barang::all();
        return view('stok_produksi.create', compact('produksi_', 'barang_', ));
    }

    public function store(Request $request)
    {
        $data = [
            'id_produksi' => $request->input('id_produksi'),
            'id_barang' => $request->input('id_barang'),
            'jumlah_stok_produksi' => $request->input('jumlah_stok_produksi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        StokProduksi::create($data);

        return redirect()->route('stok_produksi.index');
    }

    public function edit($id)
    {
        $produksi_ = Produksi::all();
        $barang_ = Barang::all();
        $stokProduksi = StokProduksi::findOrFail($id);
        return view('stok_produksi.edit', compact('stokProduksi', 'produksi_', 'barang_'));
    }

    public function update(Request $request, $id)
    {
        $stokProduksi = StokProduksi::findOrFail($id);
        $stokProduksi->id_barang = $request->id_barang;
        $stokProduksi->id_produksi = $request->id_produksi;
        $stokProduksi->jumlah_stok_produksi = $request->jumlah_stok_produksi;
        $stokProduksi->save();

        return redirect('/stok-produksi');
    }

    public function destroy($id)
    {
        $stokProduksi = StokProduksi::findOrFail($id);
        $stokProduksi->delete();
        return redirect('/stok-produksi');
    }
}
