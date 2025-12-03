<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
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
            max-width: 650px;
            margin: auto;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 18px;
            padding: 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
            animation: slideUp 0.8s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(25px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h2 {
            text-align: center;
            color: #1b3fa0;
            font-size: 27px;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        label {
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #bcd0ff;
            background: rgba(255,255,255,0.95);
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #1e90ff;
            box-shadow: 0 0 7px rgba(30,144,255,0.5);
        }

        .btn {
            display: inline-block;
            padding: 12px 22px;
            font-weight: 600;
            background: #1e90ff;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            margin-top: 15px;
        }

        .btn:hover {
            background: #0d6fe0;
            transform: scale(1.05);
        }

        .btn-back {
            background: #6c757d;
        }

        .btn-back:hover {
            background: #5a6268;
        }

        .btn-submit {
            width: 100%;
            text-align: center;
            background: #1e90ff;
            padding: 14px;
            font-size: 16px;
        }

    </style>
</head>

<body>

<div class="container">
    
    <h2><i class="fa-solid fa-user-plus"></i> Tambah Data Mahasiswa</h2>

    <a href="anggota.php" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>

    <br><br>

    <form method="post" action="tambah_aksianggota.php">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>Sekolah</label>
            <input type="text" name="sekolah" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" required>
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="nohp" required>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-submit">

    </form>

</div>

</body>
</html>
