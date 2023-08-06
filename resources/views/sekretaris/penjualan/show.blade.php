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
                                        <small class="pull-right"> Date : 2023-08-05</small>
                                    </h1>
                                </div>
                                <!-- /.col -->
                            </div><br>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    To
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
                                    From
                                    <address>
                                        <strong>Risma A</strong>
                                        <br>0877765423151
                                    </address>
                                </div>
                            </div>
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
                                                <td>PVC</td>
                                                <td>10 KG</td>
                                                <td>Rp. 8000</td>
                                                <td>Rp. 80000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="row no-print">
                        <div class=" ">
                                <a href="#" onclick="window.print();" class="btn btn-info btn-xs "><i class="fa fa-pencil"></i> cetak </a>
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