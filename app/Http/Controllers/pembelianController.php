<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembelianController extends Controller
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
        return view('sekretaris/pembelian/index', compact('datapembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $databarang = DB::table('barangs')->get();
        $datapembelian = DB::table('pembelians')
            ->select('pembelians.*', 'barangs.*')
            ->join('barangs', 'pembelians.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/pembelian/create', compact('datapembelian', 'databarang'));
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
        return view('sekretaris/pembelian/show', compact('datapembelian'));
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
        $databarang = DB::table('barangs')->get();
        $datapembelian = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->get();
        return view('sekretaris/pembelian/masukproduksi', compact('datapembelian','databarang'));
    }

    public function bahanbaku()
    {
        $datapembelian = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->get();
        return view('sekretaris/pembelian/bahanbaku', compact('datapembelian'));
    }

    public function historibahanbaku()
    {
        $datahistori1 = DB::table('histori_bahanbakus')->get();
        $datahistori = DB::table('histori_bahanbakus')
        ->select('histori_bahanbakus.*','bahanbakus.*', 'barangs.*')
            ->join('bahanbakus','histori_bahanbakus.id_bahanbaku','bahanbakus.id_bahanbaku')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/pembelian/historibahanbaku', compact('datahistori','datahistori1'));
    }
}
