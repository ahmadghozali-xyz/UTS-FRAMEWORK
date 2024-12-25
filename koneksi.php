<?php
$host = "localhost"; // Host database
$user = "root";      // Username database
$pass = "";          // Password database (default kosong di Laragon)
$db = "login"; // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
