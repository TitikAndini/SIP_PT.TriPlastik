@extends('layout/layouts1')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>LAPORAN </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Laporan Bulanan</h2><br><br>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Dari</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="tanggal" id="tangal" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sampai</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="tanggal" id="tangal" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>

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
                                                <th>Pemasukan</th>
                                                <th>Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2023-08-01</td>
                                                <td>Rp. 0</td>
                                                <td>Rp. 123.000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2023-08-02</td>
                                                <td>Rp. 420.000</td>
                                                <td>Rp. 53.000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2023-08-03</td>
                                                <td>Rp. 0</td>
                                                <td>Rp. 0</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2023-08-04</td>
                                                <td>Rp. 0</td>
                                                <td>Rp. 57.000</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2023-08-05</td>
                                                <td>Rp. 210.000</td>
                                                <td>Rp. 0</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2023-08-06</td>
                                                <td>Rp. 0</td>
                                                <td>Rp. 0</td>
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
    </div>
</div>
<!-- /page content -->

@endsection