<?php

use App\Http\Controllers\bahanbakucontroller;
use App\Http\Controllers\barangController;
use App\Http\Controllers\barangcontroller1;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\pembelianController1;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\penjualancontroller1;
use App\Http\Controllers\userController;
use App\Models\penjualan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


// Auth::routes();


Route::get('sekretaris/', [HomeController::class, 'index']);

Route::get('sekretaris/barang/', [barangController::class, 'index']);
Route::get('sekretaris/barang/create', [barangController::class, 'create']);
Route::post('sekretaris/barang/store', [barangController::class, 'store']);
Route::get('sekretaris/barang/edit/{id}', [barangController::class, 'edit']);
Route::put('sekretaris/barang/update/{id}', [barangController::class, 'update']);
Route::delete('sekretaris/barang/destroy/{id}', [barangController::class, 'destroy']);

Route::get('sekretaris/pembelian/', [pembelianController::class, 'index']);
Route::get('sekretaris/pembelian/create', [pembelianController::class, 'create']);
Route::post('sekretaris/pembelian/store', [pembelianController::class, 'store']);

Route::get('sekretaris/pembelian/bahanbaku', [pembelianController::class, 'bahanbaku']);
Route::get('sekretaris/pembelian/masukproduksi/', [pembelianController::class, 'masuk']);
Route::put('sekretaris/pembelian/masukAksi/{id}', [pembelianController::class, 'masukAksi']);
Route::get('sekretaris/pembelian/show/{id}', [pembelianController::class, 'show']);
Route::get('sekretaris/pembelian/historibahanbaku', [pembelianController::class, 'historibahanbaku']);

Route::get('sekretaris/penjualan/', [penjualanController::class, 'index']);
Route::get('sekretaris/penjualan/show/{id}', [penjualanController::class, 'show']);
Route::get('sekretaris/penjualan/create', [penjualanController::class, 'create']);
Route::post('sekretaris/penjualan/store', [penjualanController::class, 'store']);

Route::get('sekretaris/penjualan/barangjadi', [penjualanController::class, 'barangjadi']);
Route::get('sekretaris/penjualan/keluarproduksi', [penjualanController::class, 'keluar']);
Route::put('sekretaris/penjualan/keluarAksi/{id}', [penjualanController::class, 'keluarAksi']);
Route::get('sekretaris/penjualan/historibarangjadi', [penjualanController::class, 'historibarangjadi']);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('pemilik/', [HomeController::class, 'index1']);

Route::get('pemilik/barang/', [barangcontroller1::class, 'index']);
Route::get('pemilik/barang/create', [barangController1::class, 'create']);
Route::post('pemilik/barang/store', [barangController1::class, 'store']);
Route::get('pemilik/barang/edit/{id}', [barangController1::class, 'edit']);
Route::put('pemilik/barang/update/{id}', [barangController1::class, 'update']);
Route::delete('pemilik/barang/destroy/{id}', [barangController1::class, 'destroy']);

Route::get('pemilik/pembelian/', [pembelianController1::class, 'index']);
Route::get('pemilik/pembelian/show/{id}', [pembelianController1::class, 'show']);
Route::post('pemilik/pembelian/terima/{id}', [pembelianController1::class, 'terima']);
Route::post('pemilik/pembelian/tolak/{id}', [pembelianController1::class, 'tolak']);

Route::get('pemilik/pembelian/bahanbaku', [pembelianController1::class, 'bahanbaku']);
Route::get('pemilik/pembelian/historibahanbaku', [pembelianController1::class, 'historibahanbaku']);

Route::get('pemilik/penjualan/', [penjualancontroller1::class, 'index']);
Route::get('pemilik/penjualan/show', [penjualancontroller1::class, 'show1']);

Route::get('pemilik/penjualan/barangjadi', [penjualancontroller1::class, 'barangjadi']);
Route::get('pemilik/penjualan/historibarangjadi', [penjualancontroller1::class, 'historibarangjadi']);

Route::get('pemilik/penjualan/laporan', [penjualancontroller1::class, 'laporan']);

Route::get('pemilik/user/', [userController::class, 'index']);
Route::get('pemilik/user/create', [userController::class, 'create']);
Route::get('pemilik/user/edit/', [userController::class, 'edit']);
