@extends('layout/layouts')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>PEMBELIAN <small> BAHAN BAKU</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Pembelian Bahan Baku</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a href="{{url('sekretaris/pembelian/create')}}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Pembelian </a>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Pemasok</th>
                                                <th>No HP</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($datapembelian as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->pemasok }}</td>
                                                <td>{{ $data->no_hp }}</td>
                                                <td>{{ $data->nama_barang }}</td>
                                                <td>{{ $data->jumlah }}</td>
                                                <td>{{ $data->total }}</td>
                                                <td>
                                                    <?php
                                                    if ($data->status == "Diterima") {
                                                    ?>
                                                        <span class="badge badge-success">{{ $data->status }}</span>
                                                    <?php
                                                    } else if ($data->status == "Ditolak") {
                                                    ?>
                                                        <span class="badge badge-danger">{{ $data->status }}</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="badge badge-secondary">{{ $data->status }}</span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="{{ url('sekretaris/pembelian/show',$data->id_pembelian) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>


                                                </td>
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
    </div>
</div>
<!-- /page content -->

@endsection