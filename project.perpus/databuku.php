<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku - Perpustakaan Digital</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: url('https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1400&q=80')
      no-repeat center fixed;
      background-size: cover;
      padding: 25px;
      backdrop-filter: blur(5px);
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .container {
      background: rgba(255, 255, 255, 0.82);
      border-radius: 18px;
      padding: 30px;
      max-width: 1150px;
      margin: auto;
      box-shadow: 0 15px 40px rgba(0,0,0,0.25);
      backdrop-filter: blur(10px);
      animation: slideUp 0.9s ease;
    }

    @keyframes slideUp {
      from { transform: translateY(20px); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #1b3fa0;
      font-weight: 700;
      font-size: 30px;
      text-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255,255,255,0.95);
      border-radius: 12px;
      overflow: hidden;
      margin-top: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    th, td {
      padding: 14px;
      border-bottom: 1px solid #e4e8ff;
      font-size: 15px;
    }

    th {
      background: linear-gradient(90deg, #1e90ff, #0066ff);
      color: white;
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 0.6px;
    }

    tr:nth-child(even) { background-color: #f5f7ff; }

    tr:hover {
      background: #e3ebff;
      transition: 0.25s;
    }

    /* Tombol */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background: #1e90ff;
      color: white;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
      margin-top: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn:hover {
      background: #0d6fe0;
      transform: scale(1.05);
    }

    .logout {
      float: right;
      background: #ff4b5c;
    }

    .logout:hover {
      background: #e63e4d;
    }

  </style>
</head>

<body>

<div class="container">

  <h2><i class="fa-solid fa-book"></i> Data Buku Perpustakaan Digital</h2>

  <table>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Quantity</th>
      </tr>

      <?php
      include 'koneksi.php';
      $data = mysqli_query($koneksi,"SELECT * FROM admin");
      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
          <td><?php echo $d['id']; ?></td>
          <td><?php echo $d['judul']; ?></td>
          <td><?php echo $d['genre']; ?></td>
          <td><?php echo $d['quantity']; ?></td>
      </tr>
      <?php 
      }
      ?>
  </table>

  <a href="logout.php" class="btn logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  <a href="cetak_laporan.php" class="btn" target="_blank"><i class="fa-solid fa-print"></i> Cetak Laporan</a>

</div>

</body>
</html>
