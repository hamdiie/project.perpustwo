<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - CRUD Modern</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            padding: 30px;
            backdrop-filter: blur(5px);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .container {
            background: rgba(255, 255, 255, 0.88);
            border-radius: 18px;
            padding: 30px;
            max-width: 1150px;
            margin: auto;
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
            backdrop-filter: blur(10px);
            animation: slideUp 0.8s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(25px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h2 {
            text-align: center;
            color: #1b3fa0;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 25px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        /* Tombol */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #1e90ff;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin: 5px 5px 15px 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .btn:hover {
            background: #0d6fe0;
            transform: scale(1.05);
        }

        .logout {
            background: #ff4b5c;
        }

        .logout:hover {
            background: #e63e4d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255,255,255,0.97);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        th {
            background: linear-gradient(90deg, #1e90ff, #0066ff);
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            padding: 14px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #e4e8ff;
            font-size: 15px;
        }

        tr:nth-child(even) { background-color: #f5f7ff; }

        tr:hover {
            background: #e8eeff;
            transition: 0.25s;
        }

        .btn-edit {
            color: white;
            background: #28a745;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        }

        .btn-edit:hover { background: #218838; }

        .btn-hapus {
            color: white;
            background: #dc3545;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        }

        .btn-hapus:hover { background: #c82333; }

        .actions {
            display: flex;
            gap: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2><i class="fa-solid fa-user-graduate"></i> Data Mahasiswa</h2>

    <!-- Tombol sejajar & rapi -->
    <div class="button-group">
        <a href="tambahanggota.php" class="btn"><i class="fa-solid fa-plus"></i> Tambah Mahasiswa</a>
        <a href="cetak_laporan.php" class="btn" target="_blank"><i class="fa-solid fa-print"></i> Cetak Laporan</a>
        <a href="logout.php" class="btn logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['sekolah']; ?></td>
            <td><?= $d['alamat']; ?></td>
            <td><?= $d['nohp']; ?></td>
            <td class="actions">
                <a class="btn-edit" href="edit.php?id=<?= $d['id']; ?>">
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                </a>
                <a class="btn-hapus" href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">
                    <i class="fa-solid fa-trash"></i> Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
