<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        $outlet = Outlet::paginate(5);

        return view('outlet.index', [
            'outlet' => $outlet,
        ]);
    }

    public function addView()
    {
        return view('outlet.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_outlet' => $request->input('nama_outlet'),
            'alamat_outlet' => $request->input('alamat_outlet'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Outlet::create($data);

        return redirect()->route('outlet.index');
    }

    public function edit($id)
    {
        $outlet = Outlet::findOrFail($id);
        return view('outlet.edit', compact('outlet'));
    }

    public function update(Request $request, $id)
    {
        $outlet = Outlet::findOrFail($id);
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->alamat_outlet = $request->alamat_outlet;
        $outlet->save();

        return redirect('/outlet');
    }

    public function destroy($id)
    {
        $outlet = Outlet::findOrFail($id);
        $outlet->delete();
        return redirect('/outlet');
    }
}
