<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku - Perpus Digital</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0; padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* Background foto + blur */
        body {
            background: url('https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1400&q=80')
                no-repeat center center fixed;
            background-size: cover;
            padding: 40px;
            backdrop-filter: blur(5px);
            animation: fadeIn 0.8s ease;
        }

        /* Card container */
        .container {
            max-width: 600px;
            margin: auto;
            background: rgba(255, 255, 255, 0.85);
            padding: 35px 35px;
            border-radius: 18px;
            backdrop-filter: blur(8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.25);
            animation: slideUp 0.8s ease;
        }

        h3 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.9em;
            font-weight: 600;
            color: #1e3d8f;
            text-shadow: 0 2px 5px rgba(0,0,0,0.15);
        }

        table { width: 100%; font-size: 1.05em; }

        td {
            padding: 10px 0;
            color: #444;
            font-weight: 500;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #c9d7ff;
            outline: none;
            transition: 0.25s;
            background: rgba(255,255,255,0.9);
        }

        input:focus {
            border-color: #1e90ff;
            box-shadow: 0 0 8px rgba(30,144,255,0.45);
        }

        .btn-submit {
            margin-top: 15px;
            width: 100%;
            background: #1e90ff;
            padding: 13px;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.15em;
            font-weight: 600;
            cursor: pointer;
            transition: 0.28s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.18);
        }

        .btn-submit:hover {
            background: #0d6fe0;
            transform: scale(1.03);
        }

        /* Tombol kembali */
        .back {
            display: inline-block;
            margin-bottom: 25px;
            padding: 10px 18px;
            background: #1e3d8f;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.95em;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.18);
            transition: 0.25s;
        }

        .back:hover {
            background: #142866;
            transform: scale(1.05);
        }

        /* Animasi */
        @keyframes fadeIn {
            from {opacity: 0;}
            to   {opacity: 1;}
        }

        @keyframes slideUp {
            from {opacity: 0; transform: translateY(20px);}
            to   {opacity: 1; transform: translateY(0);}
        }

    </style>
</head>

<body>

    <a href="halaman_admin.php" class="back">← Kembali</a>

    <div class="container">
        <h3>Tambah Data Buku</h3>

        <form method="post" action="tambah_aksi.php">
            <table>
                <tr><td>Judul Buku</td></tr>
                <tr>
                    <td><input type="text" name="judul" placeholder="Masukkan judul buku" required></td>
                </tr>

                <tr><td>Genre</td></tr>
                <tr>
                    <td><input type="text" name="genre" placeholder="Contoh: Fiksi, Edukasi, Novel" required></td>
                </tr>

                <tr><td>Quantity</td></tr>
                <tr>
                    <td><input type="number" name="quantity" placeholder="Jumlah buku tersedia" required></td>
                </tr>

                <tr>
                    <td><button type="submit" class="btn-submit">Simpan Data</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
