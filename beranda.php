<!DOCTYPE html>
<html lang='id'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Menu Utama SCM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
        transition: background-color 0.5s;
            background: linear-gradient(90deg, rgba(39,1,54,1) 0%, rgba(0,0,0,1) 50%, rgba(1,3,54,1) 100%);
            background-size: 300% 300%;
            animation: gradientBG 5s ease infinite;
      color: white;
      font-family: 'Arial', sans-serif;
    }

    @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            25% { background-position: 100% 50%; }
            50% { background-position: 100% 0%; }
            75% { background-position: 0% 0%; }
            100% { background-position: 0% 50%; }
        }

        .login-container {
            background-color: rgba(31, 41, 55, 0.9); /* Warna latar belakang dengan transparansi */
            backdrop-filter: blur(15px); /* Efek blur di belakang */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5); /* Bayangan untuk kedalaman */
        }
  </style>
</head>

<body class="flex flex-col items-center justify-center min-h-screen">

  <h1 class="text-4xl font-bold mb-8 text-center">Menu Sistem Informasi Manajemen Rantai Pasokan (SCM)</h1>

  <ul class="bg-gray-800 rounded-lg shadow-lg p-6 w-80">
    <li class="mb-2">
      <a href='input_bahan.php' class="block text-center text-lg text-white hover:bg-blue-600 p-2 rounded transition duration-200">Input Bahan Baku</a>
    </li>
    <hr class="border-gray-600">
    <li class="mb-2">
      <a href='order_bahan.php' class="block text-center text-lg text-white hover:bg-blue-600 p-2 rounded transition duration-200">Order Bahan Baku</a>
    </li>
    <hr class="border-gray-600">
    <li class="mb-2">
      <a href='pengolahan.php' class="block text-center text-lg text-white hover:bg-blue-600 p-2 rounded transition duration-200">Pengolahan Bahan Baku</a>
    </li>
    <hr class="border-gray-600">
    <li class="mb-2">
      <a href='laporan.php' class="block text-center text-lg text-white hover:bg-blue-600 p-2 rounded transition duration-200">Laporan Stok dan Penjualan</a>
    </li>
  </ul>

</body>
</html>
