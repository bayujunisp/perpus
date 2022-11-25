<?php

include '../login/config.php';
include '../login/cek-login.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT buku.id, buku.judul, buku.picture, buku.pengarang, buku.penerbit, kategori.kategori, buku.deskripsi FROM buku LEFT OUTER JOIN kategori ON buku.kategori=kategori.id WHERE buku.id ='$id'") or die(mysqli_error($koneksi));
while($data = mysqli_fetch_array($query)){
?>
<div class="col-lg-12">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>Detail buku : <?php echo $data['judul'];?></strong>
	</div>
	<div class="panel-body">
		<div class="row">
		<div class="col-lg-4">
			<img src="<?php echo $data['picture'];?>" height="350" width="250">
		</div>
		<div class="col-lg-8">
		<div class="form-group">
			<label><h4>Judul Buku</h4></label><br>
			<?php echo $data['judul'];?><br>
		</div>
		<div class="form-group">
			<label><h4>Pengarang</h4></label><br>
			<?php echo $data['pengarang'];?><br>
		</div>
		<div class="form-group">
			<label><h4>Penerbit</h4></label><br>
			<?php echo $data['penerbit'];?><br>
		</div>
		<div class="form-group">
			<label><h4>Kategori</h4></label><br>
			<?php echo $data['kategori'];?><br>
		</div>
		<div class="form-group">
			<label><h4>Deskripsi</h4></label><br>
			<?php echo $data['deskripsi'];?><br>
		</div>
		</div>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo 'buku/addpinjaman.php?id='.$data['id'].'';?>" class="btn btn-primary">Tambah ke daftar peminjaman</a>
		<a href="profile.php" class="btn btn-success">Back</a>
	</div>
	</div>
</div>
<?php
}
?>