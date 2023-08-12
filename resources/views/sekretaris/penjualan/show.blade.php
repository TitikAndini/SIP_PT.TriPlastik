@extends('layout/layouts')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Bukti <small>Pembelian Bahan Baku</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bukti <small>Penjualan Barang Jadi</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="invoice-header">
                                    <h1>
                                        <!-- <i class="fa fa-recycle"></i> -->
                                        <small class="pull-right"> Date : {{$datapenjualan->tanggal}}</small>
                                    </h1>
                                </div>
                                <!-- /.col -->
                            </div><br>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>PT. TRI PLASTIK </strong>
                                        <br>Jalan D.Sudrajat No.05
                                        <br>Desa. Grinting, Kec. Bulakamba,
                                        <br>Kab. Brebes, Jawa Tengah
                                        <br>Kode POS 52253
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>{{$datapenjualan->pembeli}}</strong>
                                        <br>{{$datapenjualan->no_hp}}
                                    </address>
                                </div>
                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="  table">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga per KG</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$datapenjualan->nama_barang}}</td>
                                                <td>{{$datapenjualan->jumlah}}</td>
                                                <td>{{$datapenjualan->harga_beli}}</td>
                                                <td>{{$datapenjualan->jumlah * $datapenjualan->harga_beli}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->

                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class=" ">
                                    <a href="#" onclick="window.print();" class="btn btn-info btn-xs "><i class="fa fa-pencil"></i> cetak </a>

                                    <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
                                    <!-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button> -->
                                    <!-- <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection