<?php

namespace App\Http\Controllers;

use App\Models\TenagaKerja;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TenagaKerjaController extends Controller
{
    public function index()
    {
        $tenaga_kerja = TenagaKerja::paginate(5);

        return view('tenaga_kerja.index', [
            'tenaga_kerja' => $tenaga_kerja,
        ]);
    }

    public function addView()
    {
        return view('tenaga_kerja.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_tenaga_kerja' => $request->input('nama_tenaga_kerja'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        TenagaKerja::create($data);

        return redirect()->route('tenaga_kerja.index');
    }

    public function edit($id)
    {
        $tenaga_kerja = TenagaKerja::findOrFail($id);
        return view('tenaga_kerja.edit', compact('tenaga_kerja'));
    }

    public function update(Request $request, $id)
    {
        $tenaga_kerja = TenagaKerja::findOrFail($id);
        $tenaga_kerja->nama_tenaga_kerja = $request->nama_tenaga_kerja;
        $tenaga_kerja->save();

        return redirect('/tenaga-kerja');
    }

    public function destroy($id)
    {
        $tenaga_kerja = TenagaKerja::findOrFail($id);
        $tenaga_kerja->delete();
        return redirect('/tenaga-kerja');
    }
}
