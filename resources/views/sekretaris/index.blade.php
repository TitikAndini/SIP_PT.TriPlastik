@extends('layout/layouts')
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
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Top Profiles <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">April</p>
                                <p class="day">23</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Item One Title</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </article>
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">April</p>
                                <p class="day">23</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Item Two Title</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </article>
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">April</p>
                                <p class="day">23</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Item Two Title</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </article>
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">April</p>
                                <p class="day">23</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Item Two Title</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </article>
                        <article class="media event">
                            <a class="pull-left date">
                                <p class="month">April</p>
                                <p class="day">23</p>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Item Three Title</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- /page content -->
@endsection