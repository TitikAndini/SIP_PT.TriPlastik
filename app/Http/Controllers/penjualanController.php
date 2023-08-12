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
        $databarang = DB::table('barangs')->get();
        $datapenjualan = DB::table('penjualans')
            ->select('penjualans.*', 'barangs.*')
            ->join('barangs', 'penjualans.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/penjualan/create', compact('datapenjualan', 'databarang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('barangs')
            ->select('barangs.harga_jual')
            ->where('barangs.id_barang', $request->id_barang)->get();

        $total = $data[0]->harga_jual * $request->jumlah;

        DB::table('penjualans')->insert([
            'tanggal' => $request->tanggal,
            'pembeli' => $request->pembeli,
            'no_hp' => $request->no_hp,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'total' => $total
        ]);

        $data1 = DB::table('barangjadis')
            ->select('barangjadis.*', 'barangs.*')
            ->join('barangs', 'barangjadis.id_barang', 'barangs.id_barang')
            ->where('barangjadis.id_barang', $request->id_barang)->first();

        $data2 = $data1->Stok - $request->jumlah;

        DB::table('barangjadis')->where('id_barang', $request->id_barang)->update([
            'Stok' => $data2,
        ]);

        return redirect()->to('sekretaris/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function barangjadi()
    {
        $datapenjualan = DB::table('barangjadis')
            ->select('barangjadis.*', 'barangs.*')
            ->join('barangs', 'barangjadis.id_barang', 'barangs.id_barang')
            ->get();
        return view('sekretaris/penjualan/barangjadi', compact('datapenjualan'));
    }
    public function keluar()
    {
        $databarang = DB::table('barangs')->get();
        $databarangjadi = DB::table('barangjadis')
            ->select('barangjadis.*', 'barangs.*')
            ->join('barangs', 'barangjadis.id_barang', 'barangs.id_barang')
            ->get();
        return view('sekretaris/penjualan/keluarproduksi', compact('databarang', 'databarangjadi'));
    }

    public function keluarAksi(Request $request, $id)
    {
        $data1 = DB::table('barangjadis')
            ->select('barangjadis.*', 'barangs.*')
            ->join('barangs', 'barangjadis.id_barang', 'barangs.id_barang')
            ->where('barangjadis.id_barangjadi', $id)->first();
        // dd($data1);
        $data2 = $data1->Stok + $request->jumlah;

        DB::table('barangjadis')->where('id_barang', $request->id_barang)->update([
            'Stok' => $data2,
        ]);

        DB::table('historipenjualans')->insert([
            'tanggal' => $request->tanggal,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->to('sekretaris/penjualan/historibarangjadi');
    }

    public function historibarangjadi()
    {
        $datahistori = DB::table('historipenjualans')
            ->select('historipenjualans.*', 'barangs.*')
            ->join('barangs', 'historipenjualans.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/penjualan/historibarangjadi', compact('datahistori'));
    }

    public function show($id)
    {
        $datapenjualan = DB::table('penjualans')
        ->select('penjualans.*', 'barangs.*')
        ->join('barangs', 'penjualans.id_barang', 'barangs.id_barang')
        ->where('penjualans.id_penjualan', $id)->first();
        return view('sekretaris/penjualan/show', compact('datapenjualan'));
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
