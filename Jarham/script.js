document.addEventListener("DOMContentLoaded", () => {
  const noBtn = document.getElementById("no-btn");
  const sadText = document.getElementById("sad-text");

  noBtn.addEventListener("click", () => {
    sadText.classList.remove("hidden");
    noBtn.disabled = true;
    noBtn.textContent = "😭 Sedih...";
  });
});
// Tanya capek
document.addEventListener("DOMContentLoaded", () => {
  const yesBtn = document.getElementById("yes-tired");
  const noBtn = document.getElementById("no-tired");
  const nextQ = document.getElementById("next-question");

  if (yesBtn && noBtn) {
    yesBtn.addEventListener("click", () => {
      yesBtn.textContent = "Istirahat dulu ya 😴";
      nextQ.classList.remove("hidden");
    });

    noBtn.addEventListener("click", () => {
      noBtn.textContent = "Hebat banget kamu 💪";
      nextQ.classList.remove("hidden");
    });
  }
});
