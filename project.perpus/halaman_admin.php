<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - Perpustakaan Digital</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #eef3f8;
      color: #333;
      display: flex;
    }

    /* ----- SIDEBAR ----- */
    .sidebar {
      width: 240px;
      background: #0d6efd;
      color: #fff;
      height: 100vh;
      padding: 25px 20px;
      position: fixed;
      box-shadow: 2px 0 10px rgba(0,0,0,0.15);
      border-radius: 0 15px 15px 0;
    }

    .sidebar h2 {
      font-size: 22px;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
    }

    .nav-link {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 10px;
      color: white;
      text-decoration: none;
      transition: 0.3s;
      font-size: 15px;
    }

    .nav-link:hover,
    .nav-link.active {
      background: #084ec1;
      transform: translateX(5px);
    }

    .logout {
      margin-top: 30px;
      background: #dc3545;
    }

    .logout:hover {
      background: #b42b38;
    }

    /* ----- MAIN ----- */
    .main {
      margin-left: 260px;
      padding: 30px;
      width: 100%;
    }

    header {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
      color: #0d6efd;
      font-weight: 600;
    }

    .btn {
      background: #0d6efd;
      padding: 10px 16px;
      border-radius: 8px;
      color: white;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn:hover {
      background: #084ec1;
    }

    /* ----- TABEL ----- */
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      margin-top: 20px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    th {
      background: #0d6efd;
      color: white;
      padding: 12px;
      font-size: 14px;
    }

    td {
      padding: 12px;
      border-bottom: 1px solid #eee;
      text-align: center;
      font-size: 14px;
    }

    tr:hover {
      background: #f6f9ff;
    }

    .opsi a {
      color: #0d6efd;
      margin: 0 5px;
      text-decoration: none;
      font-weight: 600;
    }

    .opsi a:hover {
      text-decoration: underline;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 16px;
      background: #198754;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      color: #666;
      font-size: 13px;
    }

    /* ----- RESPONSIVE ----- */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
        border-radius: 0;
      }
      .main {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

<?php 
session_start();
if($_SESSION['level']==""){
  header("location:login.php?pesan=gagal");
}
?>

<!-- Sidebar -->
<div class="sidebar">
  <h2><i class="fa-solid fa-book"></i> Perpus</h2>

  <a href="#" class="nav-link active"><i class="fa-solid fa-house"></i> Dashboard</a>
  <a href="tambah.php" class="nav-link"><i class="fa-solid fa-plus"></i> Tambah Buku</a>
  <a href="databuku.php" class="nav-link"><i class="fa-solid fa-book-open"></i> Data Buku</a>
  <a href="anggota.php" class="nav-link"><i class="fa-solid fa-users"></i> anggota</a>
  <a href="logout.php" class="nav-link logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main">
  <header>
    <div>
      <h1>Selamat Datang, <?php echo $_SESSION['username']; ?></h1>
      <p>Login sebagai: <b><?php echo $_SESSION['level']; ?></b></p>
    </div>
  </header>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Genre</th>
      <th>Quantity</th>
      <th>Opsi</th>
    </tr>

    <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"SELECT * FROM admin");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['judul']; ?></td>
      <td><?php echo $d['genre']; ?></td>
      <td><?php echo $d['quantity']; ?></td>
      <td class="opsi">
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
    <!--Cetak Laporan-->
    <a href="cetak_laporan.php" class="btn" target="_blank" style="margin-top:20px;"><i class="fa-solid fa-print"></i> Cetak Laporan</a>

  <footer>
    <p>© 2025 Perpustakaan Digital</p>
  </footer>
</div>

</body>
</html>
