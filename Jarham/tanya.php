<?php
session_start();
if (!isset($_SESSION['nama'])) {
  header("Location: index.php");
  exit();
}
$nama = $_SESSION['nama'];
$ttl = $_SESSION['ttl'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanya Dikit 🌸</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="falling-flowers"></div>

  <div class="container fade-in">
    <h2>Maaf mengganggu waktunya yah Bu Ustadzah <?php echo htmlspecialchars($nama); ?> 💗</h2>
    <p>Kamu capee nggak?</p>

    <div class="buttons">
      <button id="yes-tired">Iyaa capee 😩</button>
      <button id="no-tired">Enggak kok 😇</button>
    </div>

    <div id="next-question" class="hidden fade-in">
      <p>Boleh gak aku kasih kalimat penyemangat buat Bu Ustadzah? 💕</p>
      <button onclick="window.location.href='semangat.php'">Boleh dong 💗</button>
    </div>
  </div>

  <footer>
    <p>© 2025 <strong>Fajar Ilham Creations</strong> | Made with 💗</p>
  </footer>
</body>
</html>
