<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Data Barang
Route::resource('barang', BarangController::class);

// Data Kategori
Route::resource('kategori', KategoriController::class);

// Data Kasir
Route::resource('kasir', KasirController::class);

// Transaksi Penjualan
Route::resource('transaksi', TransaksiController::class);

Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');