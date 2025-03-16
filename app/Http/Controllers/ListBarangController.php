<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function show($id, $name)
    {
        return view('list_barang', compact('id', 'name'));
    }
}
