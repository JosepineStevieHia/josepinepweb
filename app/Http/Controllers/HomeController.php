<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Josepine',
            'pekerjaan' => 'Mahasiswa',
        ];

        return view('home')->with($data);

        $nama = 'Raapi';
        $pekerjaan = 'Mahasiswa';
        return view('home', compact('nama', 'pekerjaan'));
    }
    public function contact()
    {
        return view('contact');
    }
}
