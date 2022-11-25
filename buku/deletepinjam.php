<?php

include'../login/config.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM pinjaman WHERE id='$id'");

if($query){
	header("location:../profile.php");
}else{
	die(mysqli_error($koneksi));
}

?>