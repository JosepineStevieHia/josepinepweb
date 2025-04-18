<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/listbarang/{id}/{nama}/{harga}', [ListBarangController::class, 'tampilkan']);


Route::get('/', function (){
    return view('index');
});