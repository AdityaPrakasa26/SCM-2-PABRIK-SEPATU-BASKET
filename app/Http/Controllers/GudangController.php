<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudang = Gudang::paginate(5);

        return view('gudang.index', [
            'gudang' => $gudang,
        ]);
    }

    public function addView()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_gudang' => $request->input('nama_gudang'),
            'alamat_gudang' => $request->input('alamat_gudang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Gudang::create($data);

        return redirect()->route('gudang.index');
    }

    public function edit($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->alamat_gudang = $request->alamat_gudang;
        $gudang->save();

        return redirect('/gudang/index');
    }

    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->delete();
        return redirect('/gudang/index');
    }
}
