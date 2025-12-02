<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbperpus");

// Cek koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
  exit;
}

// Ambil data member
$query = mysqli_query($koneksi, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Data Member - Perpustakaan Digital</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 40px;
      background: #f4f8fb;
      color: #333;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #0078d7;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    th, td {
      border-bottom: 1px solid #eee;
      padding: 12px 15px;
      text-align: left;
      font-size: 14px;
    }

    th {
      background: #0078d7;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    tr:hover {
      background-color: #f1f9ff;
    }

    .btn-print {
      display: inline-block;
      background: #0078d7;
      color: #fff;
      padding: 10px 18px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.3s;
      margin-bottom: 15px;
    }

    .btn-print:hover {
      background: #005fa3;
    }

    @media print {
      .btn-print {
        display: none;
      }
      body {
        background: #fff;
      }
    }
  </style>
</head>
<body>

  <h2>📚 Data Member Perpustakaan Digital</h2>

  <a href="#" class="btn-print" onclick="window.print()">🖨️ Cetak Data</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Email</th>
        <th>No. Telepon</th>
        <th>Tanggal Daftar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($data['nama']) ?></td>
          <td><?= htmlspecialchars($data['username']) ?></td>
          <td><?= htmlspecialchars($data['email']) ?></td>
          <td><?= htmlspecialchars($data['telepon']) ?></td>
          <td><?= date('d-m-Y', strtotime($data['tgl_daftar'])) ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>
</html>
