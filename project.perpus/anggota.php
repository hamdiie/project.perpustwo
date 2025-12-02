<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Anggota - Perpustakaan Digital</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    /* Background */
    body {
      background: url('https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1400&q=80')
      no-repeat center center fixed;
      background-size: cover;
      padding: 25px;

      /* Blur halus */
      backdrop-filter: blur(5px);
      animation: fadeIn 1.2s ease;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
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

    /* Slide up */
    @keyframes slideUp {
      from { transform: translateY(20px); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #1b3fa0;
      font-weight: 700;
      font-size: 32px;
      text-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: rgba(255,255,255,0.95);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    th, td {
      padding: 14px;
      border-bottom: 1px solid #e4e8ff;
      font-size: 15px;
    }

    th {
      background: linear-gradient(90deg,#1e90ff,#0066ff);
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      font-size: 14px;
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

  <h1><i class="fa-solid fa-users"></i> Data Anggota Perpustakaan</h1>
<a href="tambah.php">+ TAMBAH MAHASISWA</a>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Anggota</th>
      <th>NIS / NIM</th>
      <th>Kelas / Prodi</th>
      <th>Alamat</th>
      <th>No. Telepon</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Ahmad Rizki</td>
      <td>20231001</td>
      <td>XI RPL</td>
      <td>Jl. Dahlia No.17</td>
      <td>081234567890</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Siti Rahma</td>
      <td>20231002</td>
      <td>X TKJ</td>
      <td>Jl. Kenanga No.22</td>
      <td>081299887744</td>
    </tr>

  </table>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data_anggota");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 

  <a href="logout.php" class="btn logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  <a href="cetak_laporan.php" class="btn" target="_blank"><i class="fa-solid fa-print"></i> Cetak Laporan</a>

</div>

</body>
</html>
