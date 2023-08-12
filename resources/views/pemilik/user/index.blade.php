@extends('layout/layouts1')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>USER </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data user</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a href="{{ url('pemilik/user/create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah </a>
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
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Nomor HP</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Trio P</td>
                                        <td>Trio12@gmail.com</td>
                                        <td>E7Obhwiwtq9oUxOmd8</td>
                                        <td>0877654317299</td>
                                        <td>
                                            <a href="{{ url('pemilik/user/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mei Lani Y</td>
                                        <td>lanimei56@gmail.com</td>
                                        <td>I9rvUGBK5hskO69BV</td>
                                        <td>098712356789</td>
                                        <td>
                                            <a href="{{ url('pemilik/user/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button>
                                        </td>
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