<?php

include ('../login/config.php');

$nis = mysqli_real_escape_string($koneksi,$_POST['nis']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);
$verpass = mysqli_real_escape_string($koneksi,$_POST['verpass']);
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$kategori = mysqli_real_escape_string($koneksi,$_POST['kategori']);

if($password == $verpass){
	$query = mysqli_query($koneksi,"INSERT INTO user VALUES('$nis','".md5($password)."','$nama','$kategori')")or die(mysqli_error($koneksi));
	header('location:../profile.php');
}else{
	header('location../profile.php?message=error1');
}
?>