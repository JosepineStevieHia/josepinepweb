<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebToko Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }
    </style>
</head>
<body class="bg-blue-100 font-sans antialiased">
<div class="max-w-2xl mx-auto mt-12 bg-white p-8 rounded-xl shadow-lg border border-blue-100">
    <h2 class="text-2xl font-bold text-blue-800 mb-6">Edit Produk</h2>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Nama Produk -->
        <div>
            <label for="nama" class="block text-sm font-medium text-blue-700 mb-1">Nama Produk</label>
            <input type="text" name="nama" id="nama"
                value="{{ old('nama', $produk->nama) }}"
                class="block w-full rounded-lg border border-blue-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                required>
        </div>

        <!-- Deskripsi -->
        <div>
            <label for="deskripsi" class="block text-sm font-medium text-blue-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4"
                class="block w-full rounded-lg border border-blue-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>

        <!-- Harga -->
        <div>
            <label for="harga" class="block text-sm font-medium text-blue-700 mb-1">Harga</label>
            <input type="number" name="harga" id="harga"
                value="{{ old('harga', $produk->harga) }}"
                class="block w-full rounded-lg border border-blue-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                required>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-between items-center">
            <a href="{{ route('produk.index') }}"
               class="text-sm text-blue-500 hover:underline transition">← Kembali</a>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition shadow">
                Update
            </button>
        </div>
    </form>
</div>
