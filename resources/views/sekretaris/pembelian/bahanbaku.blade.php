@extends('layout/layouts')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>BAHAN BAKU </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data BAHAN BAKU</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <!-- <a href="{{ url('sekretaris/barang/create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah </a> -->
                            <a href="{{url('sekretaris/pembelian/masukproduksi')}}" class="btn btn-success btn-xs"><i class="fa fa-mail-forward"></i> Masuk Produksi </a>
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
                                        <th>Nama Bahan Baku</th>
                                        <th>Harga beli</th>
                                        <th>harga jual </th>
                                        <th>stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($datapembelian as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>Rp.{{ $data->harga_beli }}</td>
                                        <td>Rp.{{ $data->harga_jual }}</td>
                                        <td>{{ $data->Stok }} KG</td>

                                    </tr>
                                    @endforeach
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