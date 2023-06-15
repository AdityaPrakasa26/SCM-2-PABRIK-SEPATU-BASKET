<?php

namespace App\Http\Controllers;

use App\Models\BiayaProduksi;
use App\Models\Produksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BiayaProduksiController extends Controller
{
    public function index()
    {
        $biayaproduksi = BiayaProduksi::all();

        return view('biaya-produksi.index', [
            'biayaproduksi' => $biayaproduksi,
        ]);
    }

    public function addView()
    {
        $produksi_ = Produksi::all();
        return view('biaya-produksi.create', compact('produksi_'));
    }

    public function store(Request $request)
    {
        $data = [
            'biaya_tenaga_kerja' => $request->input('biaya_tenaga_kerja'),
            'biaya_bahan_baku' => $request->input('biaya_bahan_baku'),
            'biaya_produksi_' => $request->input('biaya_produksi_'),
            'id_produksi' => $request->input('id_produksi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        BiayaProduksi::create($data);

        return redirect()->route('biaya-produksi.index');
    }

    public function edit($id)
    {
        $biayaproduksi = BiayaProduksi::findOrFail($id);
        $produksi_ = Produksi::all();
        return view('biaya-produksi.edit', compact('produksi_', 'biayaproduksi', ));
    }

    public function update(Request $request, $id)
    {
        $biayaproduksi = BiayaProduksi::findOrFail($id);
        $biayaproduksi->biaya_tenaga_kerja = $request->biaya_tenaga_kerja;
        $biayaproduksi->biaya_bahan_baku = $request->biaya_bahan_baku;
        $biayaproduksi->id_produksi = $request->id_produksi;
        $biayaproduksi->save();

        return redirect('/biaya-produksi');
    }

    public function destroy($id)
    {
        $biayaproduksi = BiayaProduksi::findOrFail($id);
        $biayaproduksi->delete();
        return redirect('/biaya-produksi');
    }
}
