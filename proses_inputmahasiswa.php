<?php 
	$nimx=$_POST['id'];
	$namax=$_POST['nama'];
	$passx=($_POST['pass']);
	$statex=$_POST['state'];
	$fakultasx=$_POST['fakultas'];
	$jurusanx=$_POST['jurusan'];
	echo $nimx."-".$namax."-".$passx."-".$statex."-".$fakultasx."-".$jurusanx;
	include 'koneksi.php';
	$mahasiswa=mysqli_query($konek,"INSERT INTO mahasiswa values ('$nimx','$namax','$passx','$statex','$fakultasx','$jurusanx')");

	echo "ADDED SUCCESFULLUY.";
	header("location:Data_pengajuan.php");
?>