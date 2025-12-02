<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pengunjung - Perpustakaan Digital</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f4f6f8;
      color: #333;
    }

    /* Navbar */
    header {
      background: #0078d7;
      color: white;
      padding: 15px 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 20px;
    }

    .logout {
      background: #dc3545;
      color: white;
      padding: 8px 14px;
      border-radius: 5px;
      text-decoration: none;
    }

    .logout:hover {
      background: #b52a37;
    }

    /* Main content */
    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: white;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #0078d7;
      margin-bottom: 20px;
      text-align: center;
    }

    /* Search box */
    .search-box {
      display: flex;
      justify-content: center;
      margin-bottom: 25px;
    }

    .search-box input {
      width: 70%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px 0 0 5px;
    }

    .search-box button {
      background: #0078d7;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
    }

    .search-box button:hover {
      background: #005fa3;
    }

    /* Table */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background: #0078d7;
      color: white;
    }

    tr:hover {
      background: #f9fbff;
    }

    footer {
      text-align: center;
      font-size: 13px;
      color: #666;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<?php 
session_start();
if($_SESSION['level'] != "pengunjung"){
  header("location:login.php?pesan=gagal");
}
?>

<header>
  <h1>Selamat Datang, <?php echo $_SESSION['username']; ?> 👋</h1>
  <a href="logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</header>

<div class="container">
  <h2>📚 Daftar Buku di Perpustakaan</h2>

  <!-- Fitur pencarian -->
  <form class="search-box" method="GET">
    <input type="text" name="cari" placeholder="Cari judul buku..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Genre</th>
      <th>Jumlah</th>
    </tr>

    <?php 
    include 'koneksi.php';
    $no = 1;
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $data = mysqli_query($koneksi,"SELECT * FROM admin WHERE judul LIKE '%".$cari."%'");
    } else {
      $data = mysqli_query($koneksi,"SELECT * FROM admin");
    }
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['judul']; ?></td>
      <td><?php echo $d['genre']; ?></td>
      <td><?php echo $d['quantity']; ?></td>
    </tr>
    <?php } ?>
  </table>

  <footer>
    <p>© 2025 Perpustakaan Digital | Dashboard Pengunjung</p>
  </footer>
</div>

</body>
</html>
