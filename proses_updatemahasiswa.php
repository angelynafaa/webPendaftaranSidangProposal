<?php 
	$nimx=$_POST['id'];
	$namax=$_POST['namabaru'];
	$passx=($_POST['passbaru']);
	$statex=$_POST['statebaru'];
	$fakultasx=$_POST['fakultasbaru'];
	$jurusanx=$_POST['jurusanbaru'];
	echo $nimx."-".$namax."-".$passx."-".$statex."-".$fakultasx."-".$jurusanx;
	include 'koneksi.php';
	mysqli_query($konek,"UPDATE mahasiswa SET nama='$namax',judul='$passx',angkatan='$statex',fakultas='$fakultasx',jurusan='$jurusanx' WHERE id_mahasiswa='$nimx'");
	header("location:home.php");
?>



