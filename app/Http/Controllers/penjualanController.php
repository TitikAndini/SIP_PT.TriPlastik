<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapembelian = DB::table('penjualans')
            ->select('penjualans.*', 'barangs.*')
            ->join('barangs', 'penjualans.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/penjualan/index', compact('datapembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekretaris/penjualan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1()
    {
        return view('sekretaris/penjualan/show');
    }
    public function barangjadi()
    {
        return view('sekretaris/penjualan/barangjadi');
    }
    public function keluar()
    {
        return view('sekretaris/penjualan/keluarproduksi');
    }
    public function historibarangjadi()
    {
        return view('sekretaris/penjualan/historibarangjadi');
    }
    public function show($id)
    {
        return view('sekretaris/penjualan/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
