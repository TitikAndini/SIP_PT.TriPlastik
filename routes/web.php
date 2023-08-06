<?php

use App\Http\Controllers\bahanbakucontroller;
use App\Http\Controllers\barangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\penjualanController;
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
Route::get('sekretaris/pembelian/masukproduksi', [pembelianController::class, 'masuk']);
Route::get('sekretaris/pembelian/show/{id}', [pembelianController::class, 'show']);
Route::get('sekretaris/pembelian/historibahanbaku', [pembelianController::class, 'historibahanbaku']);


Route::get('sekretaris/penjualan/', [penjualanController::class, 'index']);
Route::get('sekretaris/penjualan/show', [penjualanController::class, 'show1']);
Route::get('sekretaris/penjualan/create', [penjualanController::class, 'create']);
Route::get('sekretaris/penjualan/barangjadi', [penjualanController::class, 'barangjadi']);
Route::get('sekretaris/penjualan/keluarproduksi', [penjualanController::class, 'keluar']);
Route::get('sekretaris/penjualan/historibarangjadi', [penjualanController::class, 'historibarangjadi']);