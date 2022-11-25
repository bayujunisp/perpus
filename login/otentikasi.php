<?php
include('config.php');

session_start();


$nis=$_POST['nis'];
$password=md5($_POST['password']);


// $nis=mysqli_real_escape_string($koneksi,$nis);
// $password=mysqli_real_escape_string($koneksi,md5($password));


if (empty($nis) && empty($password)){
	
	header('location:../index.php?error=1');
	
}else if (empty($nis)){
	
	header('location:../index.php?error=2');
	
}else if (empty($password)){
	
	header('location:../index.php?error=3');
	
}

$q= mysqli_query($koneksi,"SELECT * FROM user WHERE nis='$nis' AND password='$password'");

if(mysqli_num_rows($q) == 1){
	
	$_SESSION['nis'] = $nis;
		
	header('location:../profile.php');
} else {
	
	header('location:../index.php?error=4');
	
}
?>