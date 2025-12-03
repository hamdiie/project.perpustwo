<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>PerpusDigital — Landing Modern</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    :root{
      --primary: #1e90ff;
      --primary-600: #0d6fe0;
      --muted: #6b7280;
      --bg-image: url('https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1600&q=80');
      --card-bg: rgba(255,255,255,0.86);
      --glass-border: rgba(255,255,255,0.4);
      --text: #0f172a;
    }
    [data-theme="dark"]{
      --primary: #4aa8ff;
      --primary-600: #1b7fe6;
      --muted: #cbd5e1;
      --card-bg: rgba(10,18,34,0.55);
      --glass-border: rgba(255,255,255,0.06);
      --text: #e6eef8;
      --bg-image: linear-gradient(120deg, rgba(3,7,18,0.7), rgba(7,12,22,0.7)), url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1600&q=80');
    }

    *{box-sizing:border-box;margin:0;padding:0;font-family:"Poppins",system-ui,Segoe UI,Roboto,"Helvetica Neue",Arial;}
    html,body{height:100%;}
    body{
      background: var(--bg-image) no-repeat center/cover fixed;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      color: var(--text);
      padding: 36px;
      transition: background 0.45s ease, color 0.3s ease;
    }

    /* center container */
    .page {
      max-width: 1150px;
      margin: 40px auto;
      backdrop-filter: blur(8px) saturate(120%);
      border-radius: 18px;
      background: linear-gradient(180deg, rgba(255,255,255,0.6), rgba(255,255,255,0.7));
      box-shadow: 0 18px 50px rgba(8,22,60,0.35);
      overflow: hidden;
      border: 1px solid var(--glass-border);
      animation: slideIn 0.6s ease;
    }
    @keyframes slideIn { from{ transform: translateY(20px); opacity:0 } to{ transform:translateY(0); opacity:1 } }

    /* header */
    header.inner {
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:20px 28px;
      gap:12px;
    }
    .brand {
      display:flex;align-items:center;gap:14px;
    }
    .logo {
      width:54px;height:54px;border-radius:12px;
      background:linear-gradient(135deg,var(--primary),var(--primary-600));
      display:flex;align-items:center;justify-content:center;color:white;font-weight:700;
      box-shadow: 0 8px 24px rgba(30,144,255,0.18);
      font-size:18px;
    }
    .brand h1{ font-size:18px; font-weight:700; color:var(--text); }
    .brand p{ font-size:12px; color:var(--muted); margin-top:2px; }

    nav.top {
      display:flex;align-items:center;gap:12px;
    }
    nav.top a {
      color:var(--text);
      text-decoration:none;
      padding:8px 12px;
      border-radius:10px;
      font-weight:600;
      transition:0.18s;
      font-size:14px;
    }
    nav.top a:hover{ transform:translateY(-3px); background:rgba(0,0,0,0.03); }

    .btn-primary{
      background:var(--primary);
      color:white;
      padding:10px 16px;
      border-radius:10px;
      box-shadow: 0 8px 20px rgba(30,144,255,0.14);
      border:none;
      cursor:pointer;
      font-weight:700;
    }
    .btn-ghost{
      background:transparent;color:var(--text);border:1px solid rgba(0,0,0,0.06);padding:8px 12px;border-radius:10px;
    }

    /* hero */
    .hero {
      display:flex;
      gap:28px;
      padding:36px;
      align-items:center;
    }
    .hero-left{
      flex:1;
    }
    .hero h2{
      color:var(--text);
      font-size:30px;
      margin-bottom:12px;
      line-height:1.05;
    }
    .hero p{ color:var(--muted); max-width:680px; margin-bottom:18px; font-size:15px; line-height:1.6; }
    .hero-actions{ display:flex; gap:12px; align-items:center; flex-wrap:wrap; }

    .search-card {
      display:flex; gap:10px; align-items:center;
      background: var(--card-bg);
      padding:12px; border-radius:12px; width:100%;
      box-shadow: 0 8px 26px rgba(12,20,40,0.06);
      border:1px solid var(--glass-border);
    }
    .search-card input {
      border: none; outline:none; padding:12px 10px; font-size:14px; background:transparent; color:var(--text); width:100%;
    }
    .stat-grid {
      display:flex; gap:12px; margin-top:18px; flex-wrap:wrap;
    }
    .stat {
      background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,255,255,0.92));
      padding:12px 16px; border-radius:12px; min-width:140px;
      box-shadow: 0 8px 16px rgba(6,18,64,0.06);
      border:1px solid var(--glass-border);
    }
    .stat h3{ font-size:18px; margin-bottom:6px; color:var(--primary); }
    .stat p{ font-size:13px; color:var(--muted); }

    /* right column cards */
    .hero-right{ width:360px; flex-shrink:0; display:flex; flex-direction:column; gap:12px; }
    .card {
      background: var(--card-bg);
      padding:14px;
      border-radius:14px;
      box-shadow: 0 14px 36px rgba(8,22,60,0.06);
      border:1px solid var(--glass-border);
      overflow:hidden;
    }
    .card h4{ margin-bottom:8px; font-size:15px; color:var(--text); }
    .card .small{ font-size:13px; color:var(--muted); margin-bottom:8px; }

    /* koleksi */
    .section { padding:28px 36px; }
    .section h2 { color:var(--primary); font-size:20px; margin-bottom:14px; }
    .grid {
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap:18px;
      margin-top:12px;
    }
    .book {
      background: linear-gradient(180deg, rgba(255,255,255,0.92), rgba(255,255,255,0.86));
      border-radius:12px; overflow:hidden; border:1px solid var(--glass-border);
      box-shadow: 0 12px 30px rgba(12,20,40,0.06);
      transform: translateY(18px); opacity:0; transition: all 0.6s ease;
    }
    .book.show { transform: translateY(0); opacity:1; }
    .book img { width:100%; height:160px; object-fit:cover; display:block; }
    .book .meta { padding:12px; }
    .book h3{ font-size:15px; margin-bottom:8px; color:var(--text); }
    .book p{ font-size:13px; color:var(--muted); margin-bottom:10px; }

    .book .cta { display:flex; gap:8px; align-items:center; }
    .pill { padding:8px 10px; border-radius:999px; font-size:13px; background:rgba(0,0,0,0.04); color:var(--muted); font-weight:600; }

    /* kontak form */
    .contact {
      display:flex; gap:18px; align-items:flex-start; margin-top:14px; flex-wrap:wrap;
    }
    .contact form{ flex:1; min-width:260px; }
    .contact .info { width:320px; min-width:220px; background:var(--card-bg); padding:14px; border-radius:12px; border:1px solid var(--glass-border); }

    input, textarea {
      width:100%; padding:12px; border-radius:10px; border:1px solid rgba(12,20,40,0.06); resize:vertical;
      font-size:14px; background:rgba(255,255,255,0.92);
    }
    textarea{ min-height:120px; }

    /* footer */
    footer { background: linear-gradient(90deg, rgba(30,144,255,0.12), rgba(0,120,215,0.06)); padding:16px 28px; display:flex; justify-content:space-between; align-items:center; gap:12px; }
    footer p{ color:var(--muted); font-size:13px; }

    /* responsive */
    @media (max-width:992px){
      .hero { flex-direction:column; }
      .hero-right{ width:100%; order:2; }
    }
    @media (max-width:640px){
      .page { margin:16px; padding:0; }
      header.inner{ padding:12px; }
      .hero{ padding:20px; }
      .hero h2{ font-size:22px; }
      .brand h1{ font-size:16px; }
    }
  </style>
</head>
<body>

  <div class="page" id="siteRoot">
    <!-- header -->
    <header class="inner">
      <div class="brand">
        <div class="logo">PD</div>
        <div>
          <h1>PerpusDigital</h1>
          <p>Perpustakaan Digital — Akses ilmu tanpa batas</p>
        </div>
      </div>

      <nav class="top" aria-label="Main navigation">
        <a href="#home">Beranda</a>
        <a href="#koleksi">Koleksi</a>
        <a href="#tentang">Tentang</a>
        <a href="#kontak" class="btn-ghost">Kontak</a>
        <a href="login.php" class="btn-primary" title="Masuk ke akun">Login</a>
        <button id="themeToggle" class="btn-ghost" title="Toggle theme"><i id="themeIcon" class="fa-regular fa-moon"></i></button>
      </nav>
    </header>

    <!-- hero -->
    <section id="home" class="hero" role="region" aria-label="Hero">
      <div class="hero-left">
        <h2>Selamat datang di PerpusDigital — Jelajahi & baca kapan saja</h2>
        <p>Ribuan buku elektronik, jurnal, dan referensi akademik di satu tempat. Mudah diakses, cepat dicari, dan rapi tersusun untuk mendukung pembelajaran Anda.</p>

        <div class="hero-actions">
          <div class="search-card" role="search" aria-label="Cari buku">
            <i class="fa-solid fa-magnifying-glass" style="color:var(--muted);margin-right:10px;"></i>
            <input id="searchInput" type="text" placeholder="Cari judul, pengarang, atau topik..." />
            <button class="btn-primary" id="searchBtn">Cari</button>
          </div>
        </div>

        <div class="stat-grid" aria-hidden="true">
          <div class="stat">
            <h3>12.345</h3>
            <p>Buku & koleksi</p>
          </div>
          <div class="stat">
            <h3>3.214</h3>
            <p>Pengguna terdaftar</p>
          </div>
          <div class="stat">
            <h3>98%</h3>
            <p>Tingkat kepuasan</p>
          </div>
        </div>
      </div>

      <aside class="hero-right" aria-label="Highlights">
        <div class="card">
          <h4>Rekomendasi Hari Ini</h4>
          <p class="small">Buku populer dan artikel yang sering dibaca anggota kami.</p>
          <div style="display:flex;gap:10px;flex-direction:column;">
            <div style="display:flex;align-items:center;gap:10px;">
              <img src="https://source.unsplash.com/60x60/?book" alt="" style="width:60px;height:60px;border-radius:8px;object-fit:cover;">
              <div>
                <div style="font-weight:700">Pemrograman Modern</div>
                <div style="font-size:13px;color:var(--muted)">Rahasia praktis untuk dev</div>
              </div>
            </div>
            <div style="display:flex;align-items:center;gap:10px;">
              <img src="https://source.unsplash.com/60x60/?library" alt="" style="width:60px;height:60px;border-radius:8px;object-fit:cover;">
              <div>
                <div style="font-weight:700">Literasi Digital</div>
                <div style="font-size:13px;color:var(--muted)">Panduan & referensi</div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <h4>Pengumuman</h4>
          <p class="small">Perawatan server pada 10 Desember 2025, layanan baca mungkin terganggu singkat.</p>
          <a class="btn-primary" href="#kontak" style="display:inline-block;margin-top:8px;">Hubungi</a>
        </div>
      </aside>
    </section>

    <!-- koleksi -->
    <section id="koleksi" class="section" aria-label="Koleksi">
      <h2>Koleksi Pilihan</h2>
      <p style="color:var(--muted); margin-top:6px;">Pilihan kategori populer dari koleksi kami — klik untuk membuka detail atau membaca online.</p>

      <div class="grid" id="booksGrid">
        <div class="book">
          <img src="https://source.unsplash.com/600x400/?education,books" alt="Pendidikan">
          <div class="meta">
            <h3>Pendidikan & Pengajaran</h3>
            <p>Referensi akademik untuk guru, siswa, dan dosen.</p>
            <div class="cta">
              <span class="pill">Terbaru</span>
              <a href="#" class="btn-primary" style="margin-left:auto;">Baca</a>
            </div>
          </div>
        </div>

        <div class="book">
          <img src="https://source.unsplash.com/600x400/?technology,programming" alt="Teknologi">
          <div class="meta">
            <h3>Teknologi & IT</h3>
            <p>Buku pemrograman, AI, jaringan, dan pengembangan.</p>
            <div class="cta">
              <span class="pill">Populer</span>
              <a href="#" class="btn-primary" style="margin-left:auto;">Baca</a>
            </div>
          </div>
        </div>

        <div class="book">
          <img src="https://source.unsplash.com/600x400/?novel,books" alt="Sastra">
          <div class="meta">
            <h3>Sastra & Novel</h3>
            <p>Koleksi fiksi, puisi, dan karya sastra.</p>
            <div class="cta">
              <span class="pill">Klasik</span>
              <a href="#" class="btn-primary" style="margin-left:auto;">Baca</a>
            </div>
          </div>
        </div>

        <div class="book">
          <img src="https://source.unsplash.com/600x400/?science,books" alt="Sains">
          <div class="meta">
            <h3>Sains & Matematika</h3>
            <p>Buku ilmiah dan jurnal untuk penelitian.</p>
            <div class="cta">
              <span class="pill">Jurnal</span>
              <a href="#" class="btn-primary" style="margin-left:auto;">Baca</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- tentang -->
    <section id="tentang" class="section" style="border-top:1px solid var(--glass-border);">
      <h2>Tentang PerpusDigital</h2>
      <p style="color:var(--muted); margin-top:6px; max-width:900px;">
        PerpusDigital dibuat untuk memudahkan akses sumber belajar berkualitas. Sistem ini mendukung pembacaan online, pengelompokan koleksi, dan integrasi akun untuk manajemen pinjam buku digital.
      </p>
    </section>

    <!-- kontak -->
    <section id="kontak" class="section" style="border-top:1px solid var(--glass-border);">
      <h2>Hubungi Kami</h2>

      <div class="contact">
        <form id="contactForm" onsubmit="return handleContact(event)">
          <input type="text" id="nama" placeholder="Nama Anda" required />
          <input type="email" id="email" placeholder="Email Anda" required />
          <textarea id="pesan" placeholder="Tulis pesan Anda..." required></textarea>
          <div style="display:flex;gap:10px;align-items:center;">
            <button class="btn-primary" type="submit">Kirim Pesan</button>
            <button type="button" class="btn-ghost" onclick="resetContact()">Reset</button>
          </div>
        </form>

        <div class="info">
          <h3 style="margin-bottom:8px;">Kontak & Alamat</h3>
          <p style="color:var(--muted);font-size:14px;">Jl. Contoh No.1, Kota — Email: admin@perpusdigital.example</p>
          <hr style="margin:12px 0;border:none;border-top:1px solid var(--glass-border);" />
          <p style="font-size:13px;color:var(--muted);">Jam operasional: Senin — Jumat, 08:00 — 17:00</p>
          <div style="margin-top:10px; display:flex; gap:8px;">
            <a href="#" class="btn-ghost" style="display:inline-flex;align-items:center;gap:8px;"><i class="fa-brands fa-facebook"></i> FB</a>
            <a href="#" class="btn-ghost" style="display:inline-flex;align-items:center;gap:8px;"><i class="fa-brands fa-instagram"></i> IG</a>
            <a href="#" class="btn-ghost" style="display:inline-flex;align-items:center;gap:8px;"><i class="fa-brands fa-twitter"></i> TW</a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <p>© 2025 PerpusDigital. All Rights Reserved.</p>
      <p style="color:var(--muted); font-size:13px;">Didesain dengan ♥ — Modern UI & Glassmorphism</p>
    </footer>
  </div>

  <script>
    // theme toggle (remember via localStorage)
    (function(){
      const root = document.documentElement;
      const btn = document.getElementById('themeToggle');
      const icon = document.getElementById('themeIcon');
      const saved = localStorage.getItem('pd-theme') || 'light';
      root.setAttribute('data-theme', saved);
      icon.className = saved === 'dark' ? 'fa-regular fa-sun' : 'fa-regular fa-moon';

      btn.addEventListener('click', () => {
        const now = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', now);
        localStorage.setItem('pd-theme', now);
        icon.className = now === 'dark' ? 'fa-regular fa-sun' : 'fa-regular fa-moon';
      });
    })();

    // reveal books on scroll
    function revealBooks(){
      const trigger = window.innerHeight * 0.92;
      document.querySelectorAll('.book').forEach(b=>{
        const top = b.getBoundingClientRect().top;
        if(top < trigger) b.classList.add('show');
      });
    }
    window.addEventListener('scroll', revealBooks);
    window.addEventListener('load', revealBooks);

    // search sample (local demo)
    document.getElementById('searchBtn').addEventListener('click', () => {
      const q = document.getElementById('searchInput').value.trim();
      if(!q){ alert('Ketik kata kunci pencarian terlebih dahulu.'); return; }
      alert('Demo: mencari "' + q + '". Integrasikan dengan backend untuk hasil nyata.');
    });

    // contact demo
    function handleContact(e){
      e.preventDefault();
      const nama = document.getElementById('nama').value.trim();
      const email = document.getElementById('email').value.trim();
      const pesan = document.getElementById('pesan').value.trim();
      if(!nama || !email || !pesan){ alert('Mohon lengkapi semua bidang.'); return false; }
      // di sini Anda bisa kirim fetch() ke endpoint backend. untuk demo:
      alert('Terima kasih, ' + nama + '. Pesan Anda sudah terkirim (demo).');
      e.target.reset();
      return false;
    }
    function resetContact(){ document.getElementById('contactForm').reset(); }

    // simple accessibility: focus outline on keyboard navigation
    document.body.addEventListener('keydown', (e) => {
      if(e.key === 'Tab') document.documentElement.style.scrollBehavior = 'smooth';
    });
  </script>
</body>
</html>
