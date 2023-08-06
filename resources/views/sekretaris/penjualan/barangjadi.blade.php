@extends('layout/layouts')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>BARANG JADI </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data BARANG JADI</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <a href="{{url('sekretaris/penjualan/keluarproduksi')}}" class="btn btn-success btn-xs"><i class="fa fa-mail-forward"></i> Keluar Produksi </a>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang Jadi</th>
                                        <th>Harga beli</th>
                                        <th>harga jual </th>
                                        <th>stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PVC</td>
                                        <td>Rp. 900</td>
                                        <td>Rp. 8000</td>
                                        <td>17 KG</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection