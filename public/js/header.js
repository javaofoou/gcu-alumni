// CLOCK
(function () {
    const timeEl = document.getElementById('clock-time');
    const dateEl = document.getElementById('clock-date');
    const tz = "Africa/Lagos";

    function updateClock() {
        const now = new Date();
        const time = now.toLocaleTimeString("en-US", { hour12: true, timeZone: tz });
        const date = now.toLocaleDateString("en-US", { weekday: "short", month: "short", day: "numeric", timeZone: tz });
        timeEl.textContent = time;
        dateEl.textContent = date + " • WAT";
    }

    updateClock();
    setInterval(updateClock, 1000);
})();

 // === HAMBURGER TOGGLE ===
const hamburger = document.getElementById('hamburger');
const links = document.getElementById('nav-links');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  links.classList.toggle('active');
});

// === ABOUT US TOGGLE (Your Original Code, Cleaned Up) ===
function showHideAbout() {
  const about = document.getElementById("about-box");
  if (about.style.display === "block") {
    about.style.display = "none";
  } else {
    about.style.display = "block";

    // Apply slide-in animation to dropdown links
    const items = about.querySelectorAll("li");
    items.forEach((item, i) => {
      item.style.animation = `slideIn 0.4s ease ${i * 0.07}s forwards`;
    });
  }
}
// ===== DONATION MODAL =====
const donateBtn = document.getElementById('donateBtn');
const donateModal = document.getElementById('donateModal');
const donateClose = document.getElementById('donateClose');
const copyBtn = document.getElementById('copyBtn');
const acctNumber = document.getElementById('acctNumber');

// Open modal
donateBtn.addEventListener('click', () => {
  donateModal.setAttribute('aria-hidden', 'false');
});

// Close modal
donateClose.addEventListener('click', () => {
  donateModal.setAttribute('aria-hidden', 'true');
});

// Close modal on background click
donateModal.addEventListener('click', (e) => {
  if (e.target === donateModal) {
    donateModal.setAttribute('aria-hidden', 'true');
  }
});

// Copy account number
copyBtn.addEventListener('click', () => {
  navigator.clipboard.writeText(acctNumber.textContent.trim());
  copyBtn.textContent = "Copied!";
  setTimeout(() => copyBtn.textContent = "Copy", 1500);
});








