<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$sekolah = $_POST['sekolah'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

// menginput data ke database
mysqli_query($koneksi,"insert into anggota values('','$nama','$sekolah','$alamat','$nohp')");

// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
?>

