<?php 
session_start();
if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:"Poppins", sans-serif; }

        body { background:#f2f6fc; padding:20px; }

        /* HEADER */
        .header{
            background:#1e90ff;
            padding:18px 25px;
            color:white;
            border-radius:12px;
            box-shadow:0 5px 18px rgba(0,0,0,0.15);
            margin-bottom:25px;
        }

        .header h1{ font-size:1.8em; font-weight:600; }
        .info{ margin-top:8px; font-size:1.05em; }

        /* GRID MENU */
        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(230px,1fr));
            gap:22px;
            margin-top:25px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0 8px 20px rgba(0,0,0,0.08);
            transition:0.25s;
            cursor:pointer;
            text-decoration:none;
            color:#333;
        }

        .card:hover{
            transform:translateY(-6px);
            box-shadow:0 12px 25px rgba(0,0,0,0.15);
        }

        .card h3{ font-size:1.25em; margin-bottom:10px; font-weight:600; }
        .card p{ font-size:0.95em; color:#666; }

        .icon {
            font-size:40px;
            margin-bottom:15px;
            color:#1e90ff;
        }

        .logout{
            display:inline-block;
            margin-top:30px;
            padding:10px 18px;
            background:#ff4757;
            color:white;
            font-weight:600;
            text-decoration:none;
            border-radius:8px;
            transition:0.25s;
        }

        .logout:hover{ background:#e84141; }

    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <h1>Dashboard Pengunjung Perpustakaan</h1>
        <div class="info">
            Halo <b><?php echo $_SESSION['username']; ?></b>, Anda login sebagai 
            <b><?php echo $_SESSION['level']; ?></b>.
        </div>
    </div>

    <!-- MENU -->
    <div class="grid">

    <a href="data_buku.php" class="card">
        <div class="icon">📚</div>
        <h3>Data Buku</h3>
        <p>Lihat & kelola daftar buku perpustakaan.</p>
    </a>

    <a href="peminjaman.php" class="card">
        <div class="icon">📖</div>
        <h3>Data Peminjaman</h3>
        <p>Cek peminjaman & pengembalian buku.</p>
    </a>

    <a href="pengunjung.php" class="card">
        <div class="icon">👥</div>
        <h3>Data Pengunjung</h3>
        <p>Riwayat kunjungan dan statistik harian.</p>
    </a>

    <a href="laporan.php" class="card">
        <div class="icon">📊</div>
        <h3>Laporan</h3>
        <p>Cetak laporan harian, mingguan, atau bulanan.</p>
    </a>

    <a href="akun.php" class="card">
        <div class="icon">⚙️</div>
        <h3>Manajemen Akun</h3>
        <p>Kelola akun admin atau petugas perpustakaan.</p>
    </a>

    <!-- 🆕 FITUR BARU: Opsi Buku yang Mau Dipinjamkan -->
    <a href="pilih_buku.php" class="card">
        <div class="icon">📘</div>
        <h3>Pilih Buku</h3>
        <p>Pilih buku yang ingin dipinjamkan kepada anggota.</p>
    </a>

</div>


    <!-- LOGOUT -->
    <a href="logout.php" onclick="return confirm('Yakin ingin logout?')" class="logout">LOGOUT</a>

</body>
</html>
