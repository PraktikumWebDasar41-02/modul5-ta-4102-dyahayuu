<?php

	session_start();
	$koneksi = mysqli_connect('localhost','root','','ta5');

	$sql = "SELECT * FROM t_jurnal1";
	$query = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_array($query);
	echo "<pre>";
	echo "<h2> Data Diri </h2>";
	echo "Nim		: ".$row['NIM']."<br>";
	echo "Nama 		: ".$row['Nama']."<br>";
	echo "Email 		: ".$row['email']."<br>";
	echo "Tanggal Lahir 	: ".$row['Tanggal_Lahir']."<br>";
	echo "Jenis Kelamin 	: ".$row['JK']."<br>";
	echo "Prodi		: ".$row['Prodi']."<br>";
	echo "Fakultas	: ".$row['Fakultas']."<br>";
	echo "komentar 	: ".$row['komentar']."<br>";
	echo "</pre>";
	session_destroy();
?>

