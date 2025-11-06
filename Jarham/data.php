<?php
// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $ttl = $_POST['ttl'];
  // Simpan sementara ke session agar bisa ditampilkan di halaman selanjutnya
  session_start();
  $_SESSION['nama'] = $nama;
  $_SESSION['ttl'] = $ttl;

  header("Location: tanya.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Ustadzah 🌸</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Efek bunga jatuh -->
  <div class="falling-flowers"></div>

  <div class="container fade-in">
    <h2>Masukkan Data Dulu Yah 🌷</h2>
    <p>Boleh isi dulu biar aku bisa kenal lebih dekat 😄</p>
    
    <form method="POST">
      <input type="text" name="nama" placeholder="Nama lengkap" required>
      <input type="text" name="ttl" placeholder="Tempat, tanggal lahir" required>
      <button type="submit">Lanjut ➜</button>
    </form>
  </div>

  <footer>
    <p>© 2025 <strong>Fajar Ilham Creations</strong> | Made with 💗</p>
  </footer>
</body>
</html>
