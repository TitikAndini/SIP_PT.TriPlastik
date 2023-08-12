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

        $data = DB::table('barangs')
            ->select('barangs.harga_beli')
            ->where('barangs.id_barang', $request->id_barang)->get();

        $total = $data[0]->harga_beli * $request->jumlah;

        DB::table('pembelians')->insert([
            'tanggal' => $request->tanggal,
            'pemasok' => $request->pemasok,
            'no_hp' => $request->no_hp,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'total' => $total,
            'status' => "Menunggu Konfirmasi"
        ]);

        $data1 = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->where('bahanbakus.id_barang', $request->id_barang)->first();

        $data2 = $data1->Stok + $request->jumlah;

        DB::table('bahanbakus')->where('id_barang', $request->id_barang)->update([
            'Stok' => $data2,
        ]);

        return redirect()->to('sekretaris/pembelian');
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
        $databahanbaku = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->get();
        return view('sekretaris/pembelian/masukproduksi', compact('databarang','databahanbaku'));
    }

    public function masukAksi(Request $request, $id)
    {
        $data1 = DB::table('bahanbakus')
            ->select('bahanbakus.*', 'barangs.*')
            ->join('barangs', 'bahanbakus.id_barang', 'barangs.id_barang')
            ->where('bahanbakus.id_bahanbaku', $id)->first();
        // dd($data1);
        $data2 = $data1->Stok - $request->jumlah;

        DB::table('bahanbakus')->where('id_barang', $request->id_barang)->update([
            'Stok' => $data2,
        ]);

        DB::table('historipembelians')->insert([
            'tanggal' => $request->tanggal,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->to('sekretaris/pembelian/historibahanbaku');
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
        // $datahistori1 = DB::table('historipembelians')->get();
        $datahistori = DB::table('historipembelians')
            ->select('historipembelians.*', 'barangs.*')
            ->join('barangs', 'historipembelians.id_barang', 'barangs.id_barang')
            ->orderBy('tanggal', 'DESC')
            ->get();
        return view('sekretaris/pembelian/historibahanbaku', compact('datahistori'));
    }
}
