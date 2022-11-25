<?php 

include '../login/config.php';

?>
<?php
	$nis = $_GET['nis'];
	$query= mysqli_query($koneksi,"SELECT * FROM user WHERE nis='$nis'") or die(mysqli_error($koneksi));
	
	while($data = mysqli_fetch_array($query)){
?>
<div class="col-lg-12">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>Daftar Peminjaman <?php echo $data['name']; }?></strong>
	</div>
<?php

	$query2 = mysqli_query($koneksi,"SELECT pinjaman.id, pinjaman.judul, buku.picture, pinjaman.mulaipinjam FROM pinjaman LEFT OUTER JOIN buku ON pinjaman.judul = buku.judul WHERE pinjaman.nis='$nis'") or die(mysqli_error($koneksi));


?>
	<div class="panel-body">
<?php

	if(mysqli_num_rows($query2) > 0){

		while($data = mysqli_fetch_array($query2)){

			$mulaipinjam = date_create($data['mulaipinjam']);

			echo "<div class='row'>";
			echo "<div class='col-lg-3 center'>";
			echo "<img src='".$data['picture']."' height='200' width='128'/>";
			echo "</div>";
			echo "<div class='col-lg-9'>";
			echo "<div class='form-group'>";
			echo "<strong>".$data['judul']."</strong><br>";
			echo "Tanggal Peminjaman		: ".date_format($mulaipinjam, 'l jS F Y').".<br>";
			echo "Batas waktu	: 3 Hari (Apabila lebih dari 3 hari dikenakan denda Rp.2000,-)";
			echo "</div>";
			echo "<div class='form-group'>";
			echo "<a href='buku/deletepinjam.php?id=".$data['id']."' class='btn btn-danger'>Kembalikan</a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<hr>";
		}
	}else{
		echo "Tidak ada buku yang dipinjam.";
	}
?>		
	</div>
	<div class="panel-footer">
		<div class="row">
			<div class="col-lg-12 text-right">
				<a href="profile.php" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>
	</div>
</div>