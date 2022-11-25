<?php
include '../login/config.php';
include '../login/cek-login.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM buku WHERE id='$id'") or die(mysqli_error($koneksi));

while ($data = mysqli_fetch_array($query)) {
	$query2 = mysqli_query($koneksi,"SELECT * FROM user WHERE nis='$NIS'") or die(mysqli_error($koneksi));
	$newid = $data['id'];
	$judul = $data['judul'];
	while($data2 = mysqli_fetch_array($query2)){
		$nis = $data2['nis'];
		$query3 = mysqli_query($koneksi,"INSERT INTO pinjaman (nis, judul, mulaipinjam) VALUES('$nis','$judul',NOW())") or die(mysqli_error($koneksi));

		if($query3){
			header("location:../profile.php?alert=success");
		}
	}
}
?>