<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nim = $_POST['guild'];
$alamat = $_POST['esport'];
 if (!empty($nama) || !empty($nim) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into proplayer values('','$nama','$nim','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>