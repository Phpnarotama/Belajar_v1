<?php
	include '../config/koneksi.php';

	$fakultas = $_POST['fakultas'];

	if($fakultas == "null" || $fakultas == null){
		//echo "<script>alert('Maaf inputan anda masih kosong !!!');window.location = 'home.php'</script>";
		echo "gagal";
	}else{
		$res = mysqli_query($koneksi, "insert into fakultas (fakultas) values ('$fakultas')");

		if($res){
			echo "<script>alert('Input Fakultas Berhasil');window.location = 'home.php'</script>";
		}else{
			echo "<script>alert('Input Fakultas Gagal');window.location = 'home.php'</script>";
		}
	}