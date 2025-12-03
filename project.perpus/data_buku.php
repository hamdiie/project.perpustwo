<!DOCTYPEHTML>
<html>
<head>
    <title>Tambah Data Buku - Perpustakaan Digital</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4ff;
            margin: 0;
            padding: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            animation: slideUp 0.8s ease-in-out;
        }

        h3 {
            text-align: center;
            color: #1e3d8f;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
        }

        .btn-submit {
            background: #1e3d8f;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: 0.25s;
        }

        .btn-submit:hover {
            background: #142866;
            transform: scale(1.05);
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: white;
            background: #1e3d8f;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0
,0.15);


            transition: 0.25s;
        }
        .back:hover {
            background: #142866;
            transform: scale(1.05);
        }   
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Tambah Data Buku</h3>

        <form method="post" action="tambah_aksianggota.php">
            <table>
                <tr><td>Judul Buku</td></tr>
                <tr>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr><td>Genre</td></tr>
                <tr>
                    <td><input type="text" name="genre" required></td>
                </tr>
                <tr><td>Jumlah Buku</td></tr>
                <tr>
                    <td><input type="number" name="quantity" required></td>
                </tr>
            </table>
            <button type="submit" class="btn-submit">Tambah Buku</button>
        </form>

        <a href="data_buku.php" class="back">Kembali ke Data Buku</a>
    </div>