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

    <!-- Navigation -->
    <nav class="gradient-bg text-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-store text-2xl"></i>
                    <span class="text-xl font-bold">WebToko</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="hover:text-blue-200 transition">Home</a>
                    <a href="#" class="hover:text-blue-200 transition">Products</a>
                    <a href="#" class="hover:text-blue-200 transition">About</a>
                    <a href="#" class="hover:text-blue-200 transition">Contact</a>
                </div>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">

        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Produk Premium Kami</h1>
        </div>

        <!-- Products Table -->
        <div class="max-w-6xl mx-auto mb-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                    <h2 class="text-xl font-semibold text-gray-800">
                        <i class="fas fa-table mr-2 text-blue-500"></i> List Produk
                    </h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    <i class="fas fa-box-open mr-1"></i> Nama Produk
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    <i class="fas fa-align-left mr-1"></i> Deskripsi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    <i class="fas fa-tag mr-1"></i> Harga
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                    <i class="fas fa-cogs mr-1"></i> Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($produk as $index => $item)
                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">
                                    {{ $item->nama }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 max-w-xs">
                                    {{ $item->deskripsi }}
                                </td>
                                <td class="px-6 py-4 text-sm font-semibold text-blue-600">
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700 space-x-2 flex">
                                    
                                    <a href="{{ route('produk.edit', $item->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md shadow-sm flex items-center gap-1">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    
                                    <form action="{{ route('produk.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus {{ $item->nama }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md shadow-sm flex items-center gap-1">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Input Form Header -->
        <div class="bg-blue-50 p-6 border-b border-blue-100 mb-6 rounded-xl">
            <h2 class="text-center text-xl font-semibold text-blue-800">Input Produk Baru</h2>
        </div>

        <!-- Form Input Produk -->
        <div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-xl">
            <form method="POST" action="{{ route('produk.simpan') }}">
                @csrf

                <!-- Nama -->
                <div class="mb-6">
                    <label for="nama" class="block text-blue-700 font-semibold mb-2">Nama Produk</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk"
                        class="w-full px-4 py-2 rounded-xl border-2 border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400" />
                </div>

                <!-- Deskripsi -->
                <div class="mb-6">
                    <label for="deskripsi" class="block text-blue-700 font-semibold mb-2">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi produk" rows="4"
                        class="w-full px-4 py-2 rounded-xl border-2 border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400"></textarea>
                </div>

                <!-- Harga -->
                <div class="mb-6">
                    <label for="harga" class="block text-blue-700 font-semibold mb-2">Harga</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-blue-500 font-medium">Rp</span>
                        <input type="number" id="harga" name="harga" placeholder="0"
                            class="w-full pl-10 pr-4 py-2 rounded-xl border-2 border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400" />
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition duration-300 mt-4">
                    Simpan Produk
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="border-t border-gray-300 mt-16 py-6 text-center text-gray-500 text-sm">
            &copy; 2025 WebToko. All rights reserved.
        </div>
    </footer>

</body>
</html>
