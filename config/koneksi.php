<?php

	$db = "belajar";
	$user = "root";
	$pass = "bayu2505";
	$host = "localhost";

	mysqli_connect($host, $user, $pass, $db) or die("gagal");

	$koneksi = mysqli_connect($host, $user, $pass, $db);