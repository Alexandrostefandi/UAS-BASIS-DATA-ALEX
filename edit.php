<html>
<head>
	<title>Data Pro Player Freefire</title>
</head>
<body>
 
	<h3>Tambah Nama</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Mahasiswa</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from proplayer where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NAMA</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>GUILD</td>
					<td><input type="text" name="guild" value="<?php echo $d['guild']; ?>"></td>
				</tr>
				<tr>
					<td>ESPORT</td>
					<td><input type="text" name="esport" value="<?php echo $d['esport']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>