@extends('layout/layouts1')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>BARANG </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Barang</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a href="{{ url('pemilik/barang/create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah </a>
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
                                        <th>Nama barang</th>
                                        <th>Harga beli</th>
                                        <th>Harga jual </th>
                                        <th>Foto</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($databarang as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->harga_beli }}</td>
                                        <td>{{ $data->harga_jual }}</td>
                                        <td>
                                            <img src="{{ asset('/storage/'.$data->Foto) }}" style="width: 100px">
                                        </td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> -->
                                            <a href="{{ url('pemilik/barang/edit',$data->id_barang) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <form method="post" action="{{ url('pemilik/barang/destroy', $data->id_barang) }}">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button>
                                            </form>
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
<!-- /page content -->

@endsection