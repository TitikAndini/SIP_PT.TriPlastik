@extends('layout/layouts1')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row" style="display: inline-block;">
            <div class="top_tiles">
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-cubes"></i></div>
                        <div class="count">{{$barang->count()}}</div>
                        <h3>Barang</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-download"></i></div>
                        <div class="count">{{$pembelian->count()}}</div>
                        <h3>Pembelian</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-upload"></i></div>
                        <div class="count">{{$penjualan->count()}}</div>
                        <h3>Penjualan</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="count">179.000</div>
                        <h3>Pendapatan</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <div class="count">90.000</div>
                        <h3>Pengeluaran</h3>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /page content -->
@endsection