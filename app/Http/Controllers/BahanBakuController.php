<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index()
    {
        $bahan_baku = BahanBaku::paginate(5);

        return view('bahan_baku.index', [
            'bahan_baku' => $bahan_baku,
        ]);
    }

    public function addView()
    {
        return view('bahan_baku.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_bahan_baku' => $request->input('nama_bahan_baku'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        BahanBaku::create($data);

        return redirect()->route('bahan_baku.index');
    }

    public function edit($id)
    {
        $bahan_baku = BahanBaku::findOrFail($id);
        return view('bahan_baku.edit', compact('bahan_baku'));
    }

    public function update(Request $request, $id)
    {
        $bahan_baku = BahanBaku::findOrFail($id);
        $bahan_baku->nama_bahan_baku = $request->nama_bahan_baku;
        $bahan_baku->save();

        return redirect('/bahan-baku');
    }

    public function destroy($id)
    {
        $bahan_baku = BahanBaku::findOrFail($id);
        $bahan_baku->delete();
        return redirect('/bahan-baku');
    }
}
