
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$genre = $_POST['genre'];
$quantity = $_POST['quantity'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$judul','$genre','$quantity')");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>