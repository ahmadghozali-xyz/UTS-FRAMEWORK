<?php
session_start(); // Memulai sesi PHP
include 'koneksi.php'; // Menghubungkan dengan koneksi

// Menangkap data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyeleksi data user dengan username dan password yang sesuai
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($result) > 0) {
        // Jika pengguna ditemukan, simpan session dan alihkan ke halaman utama
        $_SESSION['username'] = $username;
        header("Location: beranda.php"); // Ganti dengan halaman utama Anda
        exit();
    } else {
        echo "<div class='text-red-500 text-center'>Username atau password salah!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            transition: background-color 0.5s;
            background: linear-gradient(90deg, rgba(39,1,54,1) 0%, rgba(0,0,0,1) 50%, rgba(1,3,54,1) 100%);
            background-size: 300% 300%;
            animation: gradientBG 5s ease infinite;
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
<body class="flex items-center justify-center min-h-screen">

    <div class="login-container rounded-lg shadow-lg p-10 w-96">
        <h2 class="text-3xl font-bold mb-6 text-center text-white">Login</h2>

        <form action="" method="POST"> <!-- Mengarahkan ke file ini -->
            <div class="mb-4">
                <input type="text" name="username" placeholder="Username" required class="w-full p-3 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-blue-500 bg-gray-700 text-white" />
            </div>
            <div class="mb-6 relative">
                <input type="password" id="password" name="password" placeholder="Password" required class="w-full p-3 border border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-blue-500 bg-gray-700 text-white" />
                <button type="button" id="togglePassword" class="absolute right-3 top-3 text-gray-400 hover:text-white focus:outline-none">
                    👁️
                </button>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700 transition duration-200">Login</button>
        </form>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            // Toggle antara tipe input 'password' dan 'text'
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Ubah ikon atau teks tombol jika diperlukan
            this.textContent = type === 'password' ? '👁️' : '🙈'; // Ganti ikon sesuai tipe
        });
    </script>

</body>
</html>
