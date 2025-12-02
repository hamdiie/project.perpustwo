<!DOCTYPE html>
<html lang="id" data-theme="auto">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perpustakaan Digital</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #0078d7;
      --primary-dark: #005fa3;
      --bg: #eef3f8;
      --text: #333;
      --card-bg: rgba(255,255,255,0.9);
    }
    [data-theme="dark"] {
      --primary: #4aa8ff;
      --primary-dark: #0070e0;
      --bg: #0f172a;
      --text: #e2e8f0;
      --card-bg: rgba(255,255,255,0.05);
    }

    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      scroll-behavior: smooth;
    }

    body {
      background: var(--bg);
      color: var(--text);
      transition: background 0.5s, color 0.5s;
    }

    /* NAVBAR */
    header {
      position: fixed; top: 0; width: 100%;
      background: var(--primary);
      backdrop-filter: blur(10px);
      color: white;
      padding: 15px 0;
      z-index: 1000;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo { font-size: 1.7em; font-weight: 600; }

    nav ul {
      display: flex;
      list-style: none;
      gap: 25px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      position: relative;
    }

    nav ul li a::after {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      background: white;
      left: 0; bottom: -5px;
      transition: 0.3s;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    .login-btn {
      background: white;
      color: var(--primary) !important;
      padding: 8px 18px;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.3s;
    }

    .login-btn:hover {
      background: #cce7ff;
      color: var(--primary-dark) !important;
    }

    /* DARK MODE TOGGLE */
    .theme-toggle {
      background: white;
      color: var(--primary);
      border: none;
      padding: 8px 12px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 1.2em;
      margin-left: 10px;
      transition: 0.3s;
    }
    .theme-toggle:hover {
      background: #cce7ff;
    }

    /* HERO */
    .hero {
      background: linear-gradient(rgba(0,120,215,0.75), rgba(0,120,215,0.75)),
                  url('https://source.unsplash.com/1600x900/?library,books,reading') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 180px 20px 150px;
    }

    .hero h2 {
      font-size: 2.8em;
      font-weight: 600;
      margin-bottom: 15px;
      animation: fadeInDown 1s ease;
    }

    .hero p {
      font-size: 1.1em;
      max-width: 650px;
      margin: 0 auto 25px;
      line-height: 1.8;
      animation: fadeInUp 1s ease;
    }

    .btn {
      display: inline-block;
      background: white;
      color: var(--primary);
      padding: 14px 30px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(255,255,255,0.3);
    }

    .btn:hover {
      background: #e0e0e0;
      transform: translateY(-3px);
    }

    /* SECTION */
    .section {
      padding: 90px 20px;
      text-align: center;
      transition: 0.3s;
    }

    .section h2 {
      font-size: 2.2em;
      color: var(--primary);
      margin-bottom: 20px;
    }

    .section p {
      max-width: 800px;
      margin: auto;
      font-size: 1.05em;
      line-height: 1.8;
    }

    .bg-light { background: rgba(255,255,255,0.4); }

    /* KOLEKSI */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      margin-top: 40px;
    }

    .card {
      background: var(--card-bg);
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      overflow: hidden;
      transform: translateY(20px);
      opacity: 0;
      transition: all 0.6s ease;
    }

    .card.show {
      transform: translateY(0);
      opacity: 1;
    }

    .card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: 0.3s;
    }

    .card:hover img {
      filter: brightness(0.9);
    }

    .card h3 { color: var(--primary); margin: 18px 0 10px; }

    .card p {
      padding: 0 20px 25px;
      font-size: 0.95em;
    }

    /* FORM */
    form {
      max-width: 600px;
      margin: 30px auto 0;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 14px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1em;
      width: 100%;
      background: rgba(255,255,255,0.8);
      color: var(--text);
    }

    input:focus, textarea:focus {
      border-color: var(--primary);
      outline: none;
      box-shadow: 0 0 8px rgba(0,120,215,0.3);
    }

    button {
      padding: 14px;
      background: var(--primary);
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover { background: var(--primary-dark); }

    /* FOOTER */
    footer {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 25px;
      font-size: 0.95em;
      margin-top: 60px;
    }

    /* BUTTON TO TOP */
    #toTop {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background: var(--primary);
      color: white;
      border: none;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      cursor: pointer;
      font-size: 18px;
      display: none;
      transition: 0.3s;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    #toTop:hover { background: var(--primary-dark); }

    /* ANIMASI */
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* RESPONSIVE MENU */
    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        background: var(--primary);
        position: absolute;
        top: 65px; right: 0;
        width: 220px;
        display: none;
        padding: 15px;
        border-radius: 10px 0 0 10px;
      }
      nav ul.show { display: block; }
      .menu-toggle { display: block; cursor: pointer; font-size: 1.6em; color: white; }
      nav ul li { margin: 10px 0; }
    }

    .menu-toggle { display: none; }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <header id="navbar">
    <div class="container">
      <h1 class="logo"> PerpusDigital</h1>
      <span class="menu-toggle" onclick="toggleMenu()">☰</span>
      <nav>
        <ul id="menuList">
          <li><a href="#home">Beranda</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#koleksi">Koleksi</a></li>
          <li><a href="#kontak">Kontak</a></li>
          <li><a href="login.php" class="login-btn">Login</a></li>
          <li><button class="theme-toggle" id="themeToggle">🌙</button></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section id="home" class="hero">
    <h2>Selamat Datang di Perpustakaan Digital</h2>
    <p>Temukan ribuan buku digital untuk menambah wawasanmu kapan saja, di mana saja.</p>
    <a href="#koleksi" class="btn">Jelajahi Koleksi</a>
  </section>

  <!-- TENTANG -->
  <section id="tentang" class="section">
    <div class="container">
      <h2>Tentang Kami</h2>
      <p>Perpustakaan Digital ini menyediakan akses ke berbagai koleksi buku elektronik, jurnal, dan karya ilmiah. 
         Kami berkomitmen mendukung literasi digital dan memudahkan masyarakat dalam mengakses sumber belajar berkualitas di era teknologi.</p>
    </div>
  </section>

  <!-- KOLEKSI -->
  <section id="koleksi" class="section bg-light">
    <div class="container">
      <h2>Koleksi Buku</h2>
      <div class="grid">
        <div class="card"><img src="foto1.jpg" alt="Pendidikan"><h3>Pendidikan</h3><p>Buku dan referensi akademik untuk pelajar dan mahasiswa.</p></div>
        <div class="card"><img src="foto2.jpg" alt="Teknologi"><h3>Teknologi</h3><p>Pelajari dunia teknologi dan pemrograman terkini.</p></div>
        <div class="card"><img src="foto3.jpg" alt="Sastra"><h3>Sastra</h3><p>Koleksi novel, puisi, dan karya sastra klasik dari berbagai negara.</p></div>
      </div>
    </div>
  </section>

  <!-- KONTAK -->
  <section id="kontak" class="section">
    <div class="container">
      <h2>Hubungi Kami</h2>
      <form id="contactForm">
        <input type="text" id="nama" placeholder="Nama Anda" required />
        <input type="email" id="email" placeholder="Email Anda" required />
        <textarea id="pesan" placeholder="Tulis pesan Anda..." required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 PerpusDigital. All Rights Reserved.</p>
  </footer>

  <button id="toTop" title="Kembali ke atas">⬆</button>

  <script>
    // Scroll to top
    const toTop = document.getElementById("toTop");
    window.onscroll = () => {
      toTop.style.display = window.scrollY > 200 ? "block" : "none";
      revealCards();
    };
    toTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

    // Responsive menu
    function toggleMenu() {
      document.getElementById("menuList").classList.toggle("show");
    }

    // Reveal on scroll
    const cards = document.querySelectorAll(".card");
    function revealCards() {
      const trigger = window.innerHeight * 0.9;
      cards.forEach(card => {
        const top = card.getBoundingClientRect().top;
        if (top < trigger) card.classList.add("show");
      });
    }
    revealCards();

    // Dark mode toggle
    const toggle = document.getElementById("themeToggle");
    const html = document.documentElement;
    if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
      html.setAttribute("data-theme", "dark");
      toggle.textContent = "☀️";
    }
    toggle.addEventListener("click", () => {
      const current = html.getAttribute("data-theme");
      const next = current === "dark" ? "light" : "dark";
      html.setAttribute("data-theme", next);
      toggle.textContent = next === "dark" ? "☀️" : "🌙";
    });
  </script>
</body>
</html>
