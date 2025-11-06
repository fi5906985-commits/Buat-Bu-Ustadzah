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
  <title>Pesan Semangat 🌸</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(180deg, #ffcce7, #ffeaf4);
      overflow: hidden;
    }

    .container {
      width: 90%;
      max-width: 420px;
      background: #fff;
      margin: 80px auto;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(255, 160, 200, 0.6);
      position: relative;
      z-index: 10;
      max-height: 70vh;
      overflow-y: auto;
    }

    .container::-webkit-scrollbar {
      width: 6px;
    }
    .container::-webkit-scrollbar-thumb {
      background: #f7a1c4;
      border-radius: 10px;
    }

    h2 {
      color: #ff66a3;
      text-align: center;
    }

    .small {
      font-size: 13px;
      text-align: center;
      color: #666;
    }

    p {
      color: #444;
      font-size: 15px;
      line-height: 1.6;
      margin: 10px 0;
      text-align: justify;
    }

    footer {
      text-align: center;
      font-size: 13px;
      color: #888;
      margin-bottom: 15px;
      position: fixed;
      bottom: 5px;
      left: 0;
      right: 0;
      z-index: 5;
    }

    .from {
      margin-top: 20px;
      font-style: italic;
      color: #ff66a3;
      text-align: right;
      opacity: 0;
      transition: opacity 1.5s ease-in;
    }

    .show {
      opacity: 1;
    }

    /* Efek bunga jatuh */
    .falling-flowers::before,
    .falling-flowers::after {
      content: "🌸";
      position: fixed;
      top: -10%;
      font-size: 20px;
      animation: fall 6s linear infinite;
      opacity: 0.8;
    }
    .falling-flowers::after {
      left: 70%;
      animation-delay: 2s;
    }

    @keyframes fall {
      0% { transform: translateY(-10%) rotate(0deg); }
      100% { transform: translateY(110vh) rotate(360deg); }
    }

    /* Animasi ketik */
    .typing {
      border-right: 2px solid #ff66a3;
      animation: blink 0.8s infinite;
    }

    @keyframes blink {
      50% { border-color: transparent; }
    }
  </style>
</head>
<body>
  <audio id="bg-music" src="bg.mp3" autoplay loop></audio>
  <div class="falling-flowers"></div>

  <div class="container" id="card">
    <h2>Untuk Bu Ustadzah <?php echo htmlspecialchars($nama); ?> 💗</h2>
    <p class="small">Tempat, tanggal lahir: <?php echo htmlspecialchars($ttl); ?></p>
    <div id="text"></div>
    <p id="from" class="from">— From: <strong>Fajar Ilham 🌸</strong></p>
  </div>

  <footer>
    © 2025 <strong>Fajar Ilham Creations</strong> | Made with 💗 for Bu Ustadzah Risfaa
  </footer>

  <script>
    const textElement = document.getElementById("text");
    const fromEl = document.getElementById("from");

    const sentences = [
      "Assalamu'alaikum Bu Ustadzah Risfaa 🌸",
      "Aku cuma mau bilang sesuatu yang mungkin jarang terdengar...",
      "Di balik semua kesibukan, perjuangan, dan lelah yang Risfaa rasakan, ada banyak hati yang Risfaa kuatkan tanpa kamu sadari 💫",
      "Setiap ilmu yang Risfa bagikan bukan cuma menambah pengetahuan, tapi juga menyalakan cahaya di jiwa banyak orang 💕",
      "Kadang Risfa mungkin merasa dunia terlalu berat ketika sedang capee...",
      "Tapi percayalah, Allah selalu lihat setiap niat baik dan kebaikan yang Risfa lakukan 🤍",
      "Capek boleh, berhenti sebentar juga boleh...",
      "Tapi jangan pernah menyerah ya, Bu Ustadzah Risfaaaaaaaaa. Karena perjuangan Risfa nggak pernah sia-sia 🌷",
      "Anak-anak semua bangga punya sosok sebaik Bu Ustadzah Risfaa — yang lembut tapi tegas (Aamiin), sabar tapi kuat (Aamiin) 🌸",
      "Jangan lupa istirahat, jaga kesehatan, dan terus tersenyum ya Bu Ustadzah hehehe 😊",
      "Dunia ini butuh lebih banyak orang sebaikmu 💗",
      "Terima kasih sudah jadi cahaya buat banyak orang, terutama untuk anak-anak yang Risfa ajarkan 🌼",
      "Semangat terus, Bu Ustadzah Risfaaaaa✨",
      "You are amazing... never doubt that.💞"
    ];

    let currentSentence = 0;
    let charIndex = 0;
    let speed = 45;
    let typing = true;

    function typeEffect() {
      if (currentSentence < sentences.length) {
        if (charIndex < sentences[currentSentence].length) {
          textElement.innerHTML += sentences[currentSentence].charAt(charIndex);
          charIndex++;
          textElement.scrollTop = textElement.scrollHeight;
          setTimeout(typeEffect, speed);
        } else {
          textElement.innerHTML += "<br><br>";
          currentSentence++;
          charIndex = 0;
          setTimeout(typeEffect, 800);
        }
      } else {
        fromEl.classList.add("show");
      }
    }

    window.onload = () => {
      typeEffect();
    };
  </script>
</body>
</html>
