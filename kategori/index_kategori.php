<div class="col-lg-12">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>Daftar Buku</strong>
	</div>
	<div class="panel-body">
<?php

include '../login/config.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM buku WHERE kategori ='$id'");
while($data = mysqli_fetch_array($query)){
			echo "<div class='row'>";
			echo "<div class='col-lg-3 center'>";
			echo "<img src='".$data['picture']."' height='200' width='128'/>";
			echo "</div>";
			echo "<div class='col-lg-9'>";
			echo "<div class='form-group'>";
			echo "Judul buku	: ".$data['judul'];
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<hr>";
}
?>
	</div>
	<div class="panel-footer">
		<a href="index.php" class="btn btn-success">Back</a>
	</div>
	</div>
</div>
