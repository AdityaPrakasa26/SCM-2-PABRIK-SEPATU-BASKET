<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use App\Models\Barang;
use App\Models\Produksi;
use App\Models\TenagaKerja;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksi = Produksi::with(['RBahanBaku', 'RTenagaKerja', 'RBarang'])->paginate(100);

        return view('produksi.index', [
            'produksi' => $produksi,
        ]);
    }

    public function addView()
    {
        $bahan_baku = BahanBaku::all();
        $tenaga_kerja = TenagaKerja::all();
        $barang = Barang::all();

        return view('produksi.create', [
            'bahan_baku' => $bahan_baku,
            'tenaga_kerja' => $tenaga_kerja,
            'barang' => $barang,
        ]);
    }

    public function store(Request $request)
    {
        $data = [
            'id_bahan_baku' => $request->input('id_bahan_baku'),
            'id_tenaga_kerja' => $request->input('id_tenaga_kerja'),
            'id_barang' => $request->input('id_barang'),
            'jumlah_produksi' => $request->input('jumlah_produksi'),
            'tanggal_produksi' => $request->input('tanggal_produksi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Produksi::create($data);

        return redirect()->route('produksi.index');
    }

    public function edit($id)
    {
        $produksi = Produksi::findOrFail($id);
        $bahan_baku = BahanBaku::all();
        $barang = Barang::all();
        $tenaga_kerja = TenagaKerja::all();

        return view('produksi.edit', [
            'produksi' => $produksi,
            'bahan_baku' => $bahan_baku,
            'barang' => $barang,
            'tenaga_kerja' => $tenaga_kerja,
        ]);
    }

    public function update(Request $request, $id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->id_bahan_baku = $request->id_bahan_baku;
        $produksi->id_tenaga_kerja = $request->id_tenaga_kerja;
        $produksi->id_barang = $request->id_barang;
        $produksi->jumlah_produksi = $request->jumlah_produksi;
        $produksi->tanggal_produksi = $request->tanggal_produksi;
        $produksi->save();

        return redirect('/produksi/index');
    }

    public function destroy($id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->delete();
        return redirect('/produksi/index');
    }
}
