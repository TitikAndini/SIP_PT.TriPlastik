<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = DB::table('barangs')->get();
        $pembelian = DB::table('pembelians')->get();
        $penjualan = DB::table('penjualans')->get();
        return view('sekretaris/index', compact('barang', 'pembelian', 'penjualan'));
    }

    public function index1()
    {
        $barang = DB::table('barangs')->get();
        $pembelian = DB::table('pembelians')->get();
        $penjualan = DB::table('penjualans')->get();
        return view('pemilik/index', compact('barang', 'pembelian', 'penjualan'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sekretarisHome()
    {
        return view('sekretarisHome');
    }
}
