<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show']);

Route::get('/listbarang/{id}/{nama}/{harga}', [ListBarangController::class, 'tampilkan']);
Route::get('/home', function () {
    return view('pages/home');
});