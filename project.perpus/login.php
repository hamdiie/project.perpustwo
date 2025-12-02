<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Multi User - Perpus Digital</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:"Poppins", sans-serif;
    }

    /* BACKGROUND PERPUSTAKAAN */
    body{
      height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      background:url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f') center/cover no-repeat;
      overflow:hidden;
      position:relative;
    }

    /* OVERLAY GELAP */
    body::before{
      content:"";
      position:absolute;
      top:0; left:0; width:100%; height:100%;
      background:rgba(0,0,0,0.55);
      backdrop-filter:blur(2px);
    }

    /* GLASS CARD */
    .container{
      width:100%;
      max-width:400px;
      padding:40px 35px;
      border-radius:20px;
      background:rgba(255,255,255,0.15);
      box-shadow:0 8px 35px rgba(0,0,0,0.4);
      backdrop-filter:blur(16px);
      color:white;
      z-index:5;
      animation:fadeIn 0.8s ease;
      border:1px solid rgba(255,255,255,0.2);
    }

    @keyframes fadeIn{
      from{ opacity:0; transform:translateY(25px); }
      to  { opacity:1; transform:translateY(0); }
    }

    /* TITLE */
    .title{
      text-align:center;
      font-size:2em;
      font-weight:600;
      margin-bottom:25px;
    }

    /* INPUT */
    label{
      font-size:0.95em;
      margin:8px 0 4px;
      display:block;
      font-weight:500;
    }

    input, select{
      width:100%;
      padding:12px;
      border-radius:12px;
      border:1px solid rgba(255,255,255,0.25);
      background:rgba(255,255,255,0.18);
      color:white;
      margin-bottom:15px;
      font-size:1em;
      transition:0.25s;
    }

    input::placeholder{ color:#eeeeee; }

    input:focus, select:focus{
      background:rgba(255,255,255,0.28);
      transform:scale(1.03);
      border-color:#fff;
    }

    /* BUTTON */
    .btn{
      width:100%;
      padding:12px;
      border:none;
      border-radius:12px;
      font-size:1.1em;
      font-weight:600;
      cursor:pointer;
      margin-top:8px;
      background:linear-gradient(135deg,#1e90ff,#00d5ff);
      color:white;
      box-shadow:0 4px 15px rgba(0,180,255,0.45);
      transition:0.25s;
    }

    .btn:hover{
      transform:translateY(-3px);
      box-shadow:0 6px 23px rgba(0,180,255,0.65);
    }

    .switch{
      text-align:center;
      margin-top:12px;
    }

    .switch a{
      color:#cceaff;
      text-decoration:none;
      font-weight:500;
    }

    .switch a:hover{ color:white; }

    /* ALERT */
    .alert{
      padding:10px;
      margin-bottom:10px;
      text-align:center;
      border-radius:10px;
      background:rgba(255,80,80,0.85);
      font-size:0.9em;
    }

    .alert.success{
      background:rgba(50,200,100,0.85);
    }
  </style>
</head>
<body>

  <!-- LOGIN -->
  <div class="container" id="loginForm">
    <h2 class="title">Masuk Akun</h2>

    <?php 
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
          echo "<div class='alert'>❌ Username atau Password salah!</div>";
        } elseif($_GET['pesan']=="daftar_sukses"){
          echo "<div class='alert success'>✅ Pendaftaran Berhasil!</div>";
        }
      }
    ?>

    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" placeholder="Masukkan username" required>

      <label>Password</label>
      <input type="password" name="password" placeholder="Masukkan password" required>

      <button class="btn">Login</button>
    </form>

    <div class="switch">
      Belum punya akun? <a href="#" onclick="showRegister()">Daftar Sekarang</a>
    </div>
  </div>

  <!-- REGISTER -->
  <div class="container" id="registerForm" style="display:none;">
    <h2 class="title">Daftar Akun</h2>

    <form action="register_act.php" method="post">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

      <label>Username</label>
      <input type="text" name="username" placeholder="Buat username" required>

      <label>Password</label>
      <input type="password" name="password" placeholder="Buat password" required>

      <label>Level</label>
      <select name="level" required>
        <option value="">-- Pilih Level --</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>

      <button class="btn">Daftar</button>
    </form>

    <div class="switch">
      Sudah punya akun? <a href="#" onclick="showLogin()">Login di sini</a>
    </div>
  </div>

  <script>
    function showRegister(){
      document.getElementById("loginForm").style.display="none";
      document.getElementById("registerForm").style.display="block";
    }
    function showLogin(){
      document.getElementById("registerForm").style.display="none";
      document.getElementById("loginForm").style.display="block";
    }
  </script>

</body>
</html>
