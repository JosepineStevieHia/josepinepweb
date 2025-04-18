<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 5</title>
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    <link rel="stylesheet" href="styles/style44.css">
    <link href="flowbite.min.css" rel="stylesheet" />
    <script src="flowbite.min.js"></script>
</head>

<body class="bg-blue-100 min-h-screen flex flex-col">

    <!-- ✅ Navbar -->
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">Navbar</h1>
            <ul class="flex gap-4 text-gray-600">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#" class="hover:text-blue-500">About</a></li>
                <li><a href="#" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- ✅ Konten Utama -->
    <main class="flex-grow p-6 text-center">
        <h2 class="text-3xl font-bold mb-6 text-red-600">Selamat Datang di Praktikum 5</h2>

        <div class="flex flex-wrap justify-center gap-6">
            <img src="images/gambar1.jpg" class="w-60 h-60 object-cover rounded-full shadow-lg border-4 border-white">
            <img src="images/gambar2.jpg" class="w-60 h-60 object-cover rounded-full shadow-lg border-4 border-white">
        </div>
    </main>

    <!-- ✅ Footer -->
    <footer class="bg-white rounded-t-lg shadow-sm dark:bg-gray-900 p-4">
        <div class="max-w-screen-xl mx-auto text-center text-sm text-gray-500 dark:text-gray-400">
            <ul class="flex justify-center mb-4 space-x-6">
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Privacy</a></li>
                <li><a href="#" class="hover:underline">Licensing</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
            <hr class="my-4 border-gray-300 dark:border-gray-700">
            <span>© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All rights reserved.</span>
        </div>
    </footer>

</body>
</html>