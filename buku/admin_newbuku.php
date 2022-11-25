<?php

include('../login/config.php');

$judul= $_POST['judul'];
$pengarang= $_POST['pengarang'];
$penerbit= $_POST['penerbit'];
$kategori= $_POST['kategori'];
$deskripsi= $_POST['deskripsi'];
$picture= $_FILES['picture']['name'];

$query = mysqli_query($koneksi,"INSERT INTO buku (judul, pengarang, penerbit, kategori, deskripsi, picture) VALUES('$judul','$pengarang','$penerbit','$kategori','$deskripsi','http://localhost/perpus/assets/".$picture."')");

if($query){
	header('location:../profile.php');
}
?>