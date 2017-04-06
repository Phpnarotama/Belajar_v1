<?php

include '../config/koneksi.php';

$f = $_GET['f'];

$res = mysqli_query($koneksi, "delete from fakultas where id = '$f'");

if($res){
			echo "<script>alert('Hapus Fakultas Berhasil');window.location = 'home.php'</script>";
		}else{
			echo "<script>alert('Hapus Fakultas Gagal');window.location = 'home.php'</script>";
		}