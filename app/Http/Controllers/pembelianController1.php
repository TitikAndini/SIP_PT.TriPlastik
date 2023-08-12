<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembelianController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapembelian = DB::table('pembelians')
            ->select('pembelians.*', 'barangs.*')
            ->join('barangs', 'pembelians.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('pemilik/pembelian/index', compact('datapembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function show($id)
    {
        $datapembelian = DB::table('pembelians')
            ->select('pembelians.*', 'barangs.*')
            ->join('barangs', 'pembelians.id_barang', 'barangs.id_barang')
            ->where('pembelians.id_pembelian', $id)->first();
        return view('pemilik/pembelian/show', compact('datapembelian'));
    }

    public function terima($id)
    {
        DB::table('pembelians')->where('id_pembelian', $id)->update([
            'status' => "Diterima"
        ]);

        return redirect()->to('pemilik/pembelian');
    }

    public function tolak($id)
    {
        DB::table('pembelians')->where('id_pembelian', $id)->update([
            'status' => "Ditolak"
        ]);

        return redirect()->to('pemilik/pembelian');
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

    public function masuk()
    {
    }

    public function bahanbaku()
    {
        $datapembelian = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->get();
        return view('pemilik/pembelian/bahanbaku', compact('datapembelian'));
    }

    public function historibahanbaku()
    {
        $datahistori = DB::table('historipembelians')
            ->select('historipembelians.*', 'barangs.*')
            ->join('barangs', 'historipembelians.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/pembelian/historibahanbaku', compact('datahistori'));
    }
}
