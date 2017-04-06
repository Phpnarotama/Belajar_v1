<!DOCTYPE html>
<html>
<head>
	<title>Fakultas</title>
</head>
<body>
	<center>
		<h1>Fakultas</h1><br/>
		<form action="tambah.php" method="post">
			<span>Masukan nama fakultas : </span>
			<input type="text" name="fakultas" autofocus>
			<br/>
			<input type="submit" value="simpan">
		</form>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<td><b>NO</b></td>
				<td><b>ID</b></td>
				<td><b>Fakultas</b></td>
				<td colspan="2" align="center"><b>Aksi</b></td>
			</tr>
			<?php
				include '../config/koneksi.php';

				$no = 1;
				$res = mysqli_query($koneksi, "select * from fakultas");
				while($data = mysqli_fetch_array($res)){
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['id'] ?></td>
				<td><?= $data['fakultas'] ?></td>
				<td><a href="edit.php?f=<?= $data['id'] ?>">edit</a></td>
				<td><a href="hapus.php?f=<?= $data['id'] ?>">hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>