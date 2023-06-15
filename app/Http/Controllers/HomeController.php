<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.home');
        } else if (auth()->user()->role == 'gudang') {
            return view('gudang.home');
        } else if (auth()->user()->role == 'produksi') {
            return view('produksi.home');
        }
    }
}
