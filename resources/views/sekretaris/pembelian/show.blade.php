@extends('layout/layouts')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Bukti <small>Pembelian Bahan Baku</small></h3>
            </div>

            <div class="title_right">
                <!-- <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bukti <small>Pembelian Bahan Baku</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li> -->
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
                                        <small class="pull-right"> Date : {{$datapembelian->tanggal}}</small>
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
                                        <strong>{{$datapembelian->pemasok}}</strong>
                                        <br>{{$datapembelian->no_hp}}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Status Pengajuan pembelian </b><br><br>
                                    <?php
                                    if ($datapembelian->status == "Diterima") {
                                    ?>
                                        <button class="btn btn-success " disabled><i class="fa fa-check"></i> {{$datapembelian->status}}</button>
                                    <?php
                                    } else if ($datapembelian->status == "Ditolak") {
                                    ?>
                                        <button class="btn btn-danger " disabled><i class="fa fa-remove"></i> {{$datapembelian->status}}</button>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn btn-secondary " disabled><i class="fa fa-clock-o"></i> {{$datapembelian->status}}</button>
                                    <?php } ?>

                                </div>
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
                                                <td>{{$datapembelian->nama_barang}}</td>
                                                <td>{{$datapembelian->jumlah}}</td>
                                                <td>{{$datapembelian->harga_beli}}</td>
                                                <td>{{$datapembelian->jumlah * $datapembelian->harga_beli}}</td>
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
                                    <?php
                                    if ($datapembelian->status != "Diterima") {
                                    ?>
                                        <a href="#" class="btn btn-info btn-xs disabled"><i class="fa fa-pencil"></i> cetak </a>
                                    <?php } else { ?>
                                        <a href="#" onclick="window.print();" class="btn btn-info btn-xs "><i class="fa fa-pencil"></i> cetak </a>
                                    <?php } ?>
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