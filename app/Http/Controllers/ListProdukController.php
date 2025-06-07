<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ListProdukController extends Controller
{
public function show()
{
    $produk = Produk::orderBy('nama', 'asc')->get(); // Kirim semua data produk

    return view('list_produk', compact('produk')); // Kirim variabel $produk ke view
}

    public function simpan(Request $request)
{
    $produk = new Produk;
    $produk->nama = $request->input('nama');
    $produk->deskripsi = $request->input('deskripsi');
    $produk->harga = $request->input('harga');
    $produk->save();
    return redirect()->back()->with('success', 'Data berhasil disimpan!');

}

public function delete($id)
{
    $produk = Produk::where('id', $id)->first();

    if ($produk) {
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    } else {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }
}
public function edit($id)
{
    $produk = Produk::find($id);

    if (!$produk) {
        return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
    }

    return view('edit_produk', compact('produk'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric|min:0',
    ]);

    $produk = Produk::find($id);

    if ($produk) {
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate.');
    } else {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }
}

}

