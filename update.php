<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['guild'];
$alamat = $_POST['esport'];
 
// update data ke database
mysqli_query($koneksi,"update proplayer set nama='$nama', guild='$nim', esport='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>