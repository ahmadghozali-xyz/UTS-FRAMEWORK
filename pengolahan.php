<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST['nama_produk'];
    $jumlah_bahan = $_POST['jumlah_bahan'];
    $tanggal_produksi = $_POST['tanggal_produksi'];
    $keterangan = $_POST['keterangan'];

    // Menyimpan data ke database
    $sql = "INSERT INTO pengolahan (nama_produk, jumlah_bahan, tanggal_produksi, keterangan) VALUES ('$nama_produk', '$jumlah_bahan', '$tanggal_produksi', '$keterangan')";
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<div style='color: green;'>Data pengolahan berhasil disimpan!</div>";
    } else {
        echo "<div style='color: red;'>Error: " . mysqli_error($koneksi) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pengolahan Bahan Baku</title>
   <style>
       body {
           transition: background-color 0.5s;
           background: linear-gradient(90deg, rgba(39,1,54,1) 0%, rgba(0,0,0,1) 50%, rgba(1,3,54,1) 100%);
           background-size: 300% 300%;
           animation: gradientBG 5s ease infinite;
           color: white;
           font-family: 'Arial', sans-serif;
           display: flex;
           justify-content: center;
           align-items: center;
           min-height: 100vh;
       }

       @keyframes gradientBG {
           0% { background-position: 0% 50%; }
           25% { background-position: 100% 50%; }
           50% { background-position: 100% 0%; }
           75% { background-position: 0% 0%; }
           100% { background-position: 0% 50%; }
       }

       .form-container {
           background-color: rgba(31, 41, 55, 0.9); /* Warna latar belakang dengan transparansi */
           backdrop-filter: blur(15px); /* Efek blur di belakang */
           box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5); /* Bayangan untuk kedalaman */
           padding: 20px;
           border-radius: 10px;
           width: 400px;
       }

       input, textarea {
           width: calc(100% - 20px);
           padding: 10px;
           margin-bottom: 10px;
           border-radius: 5px;
           border: none;
       }

       button {
           width: 100%;
           padding: 10px;
           border-radius: 5px;
           border: none;
           background-color: #4CAF50; /* Warna hijau */
           color: white;
           cursor: pointer;
       }

       button:hover {
           background-color: #45a049; /* Warna hijau lebih gelap saat hover */
       }
   </style>
</head>
<body>

<div class="form-container">
   <h2>Pengolahan Bahan Baku</h2>
   <form action="" method="POST">
       <input type="text" name="nama_produk" placeholder="Nama Produk" required>
       <input type="number" name="jumlah_bahan" placeholder="Jumlah Bahan Digunakan">
       <input type="date" name="tanggal_produksi">
       <textarea name="keterangan" placeholder="Keterangan"></textarea>

       <button type="submit">Simpan Pengolahan</button>
   </form>
</div>

</body>
</html>
