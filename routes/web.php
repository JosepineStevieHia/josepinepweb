<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.index');
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');
Route::get('/listproduk/edit/{id}', [ListProdukController::class, 'edit'])->name('produk.edit');
Route::put('/listproduk/update/{id}', [ListProdukController::class, 'update'])->name('produk.update');

Route::get('/listbarang/{id}/{nama}/{harga}', [ListBarangController::class, 'tampilkan']);
Route::get('/home', function () {
    return view('pages/home');
});