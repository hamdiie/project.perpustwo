<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul= $_POST['judul'];
$genre= $_POST['genre'];
$quantity= $_POST['quantity'];
 
// update data ke database
mysqli_query($koneksi,"update admin set judul='$judul', genre='$genre', quantity='$quantity' where id='$id'"); 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>