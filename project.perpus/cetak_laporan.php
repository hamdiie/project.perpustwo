<!--Halaman Print Laporan-->
<?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM admin");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Buku Perpustakaan</title>

    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            margin: 40px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #1e3d8f;
        }

        .header p {
            font-size: 14px;
            margin-top: 5px;
            color: #555;
        }

        hr {
            border: 0;
            height: 2px;
            background: #1e3d8f;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 10px;
        }

        th {
            background: #1e3d8f;
            color: white;
            padding: 10px;
            font-size: 14px;
        }

        td {
            padding: 8px 10px;
        }

        tr:nth-child(even) {
            background: #f2f6ff;
        }

        tr:hover {
            background: #dce6ff;
        }

        table, th, td {
            border: 1px solid #bfcfff;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
            font-size: 14px;
        }

        .footer b {
            color: #1e3d8f;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>LAPORAN DATA BUKU PERPUSTAKAAN</h2>
        <p>Perpus Digital - Sistem Informasi Perpustakaan</p>
    </div>

    <hr>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Genre</th>
            <th>Quantity</th>
        </tr>

        <?php 
        $no = 1;
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

    <div class="footer">
        <p><b>Tanggal Cetak:</b> <?php echo date("d-m-Y"); ?></p>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</body>
</html>
