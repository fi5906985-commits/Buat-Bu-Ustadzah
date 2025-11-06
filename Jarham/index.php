<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan dari Jarham</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <!-- Musik background -->
  <audio id="bg-music" src="bg.mp3" autoplay loop></audio>

  <!-- Efek bunga jatuh -->
  <div class="falling-flowers"></div>

  <div class="container fade-in">
    <h2>Assalamu’alaikum Bu Ustadzah 🌸</h2>
    <p>Mau tau gak pesan dariku?</p>
    <div class="buttons">
      <button onclick="window.location.href='data.php'">Mau tau 💕</button>
      <button id="no-btn">Gak mau tau 😢</button>
    </div>
    <p id="sad-text" class="hidden">😔 Yah... sedih deh kalau Bu Ustadzah gak mau tau...</p>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 <strong>Fajar Ilham Creations</strong> | Made with 💗 and Code</p>
  </footer>
</body>
</html>
