// Navbar sticky
window.addEventListener("scroll", () => {
  const navbar = document.getElementById("navbar");
  navbar.classList.toggle("scrolled", window.scrollY > 60);
});

// Tombol ke atas
const toTop = document.getElementById("toTop");
window.onscroll = () => {
  toTop.style.display = (document.documentElement.scrollTop > 200) ? "block" : "none";
};
toTop.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));

// Form login simulasi
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm");
  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const user = document.getElementById("username").value.trim();
      const pass = document.getElementById("password").value.trim();

      if (user === "admin" && pass === "123") {
        alert("Login berhasil! Selamat datang Admin 📚");
        window.location.href = "login.html";
      } else {
        alert("Username atau password salah!");
      }
    });
  }
});
