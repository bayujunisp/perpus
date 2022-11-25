<!doctype html>
<?php
include('login/config.php');
include('login/cek-login.php');
?>

<?php
if(!empty($_GET['error'])) {
	if($_GET['alert'] == success){
		echo '<div class="alert alert-success" role="alert"><strong>Notice :</strong> Sukses Menambah Daftar Pinjaman!</div>';
	}
}	
?>
<html>
<head>
	<title>Perpustakaan Online</title>
	<link rel="shortcut icon" href="assets/logo-01.png">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="page-header">
		<h1>Perpustakaan Online</h1>
	</div>
</div>

<?php
if(!empty($_GET['alert'])) {
	if($_GET['alert'] == 'success'){
		echo '<div class="alert alert-success" role="alert"><strong>Notice :</strong> Sukses Menambah Daftar Pinjaman!</div>';
	}
}	
?>

<?php 
if(!empty($_GET['message']) && $_GET['message'] =='error1'){
		echo'<div class="alert alert-danger" role="alert"><b>Peringatan!</b> Verifikasi password user tidak sama, silahkan coba lagi.</div>';
}
?>
<div class="row">
	<div class="col-lg-5">
		<div class="panel panel-default">
			<div class="panel-heading">
			<?php
				$nis = $_SESSION['nis'];
				$query= mysqli_query($koneksi,"SELECT * FROM user WHERE nis='$nis'") or die(mysqli_error($koneksi));
				
				while($data = mysqli_fetch_array($query)){
			?>
				<strong>Welcome <?php echo $data['name']; ?></strong>
			</div>
			<div class="panel-body">
				<div class="row">			
					<div class="col-lg-4">
					<img src="assets/male79.png" height="128" width="128" class="img-circle">
					</div>
					<div class="col-lg-8">
					<h3><?php echo $data['name']; ?></h3>
					Nomor NIS : <?php echo $data['nis'];?>
					<hr>
					<a href="buku/pinjaman.php?nis=<?php echo $nis; ?>" data-toggle="modal" data-target="#pinjaman" class="btn btn-primary">List Peminjaman</a><br>
					<div align="right">
					<a href="login/logout.php" class="btn btn-success">Logout</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7">
	<div class="panel panel-default">
		<div class="panel-heading">
		<ul class="nav nav-pills" role="tablist">
		  <li class="active"><a href="#all" role="tab" data-toggle="tab">All</a></li>
		  <li><a href="#category" role="tab" data-toggle="tab">Category</a></li>
		</ul>
		</div>
		<div class="panel-body">
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="all">
				<?php
					$query1= mysqli_query($koneksi,"SELECT * FROM buku") or die(mysqli_error($koneksi));
					
					while($data1 = mysqli_fetch_array($query1)){
						echo '<a data-toggle="modal" data-target="#detail" href="buku/detail.php?id='.$data1['id'].'"><img src="'.$data1['picture'].'" height="150" width="100"></a>&nbsp;&nbsp;';
					}
				?>
			</div>
			<div class="tab-pane" id="category">
				<?php
					$query2= mysqli_query($koneksi,"SELECT * FROM kategori") or die(mysqli_error($koneksi));
					
					while($data2 = mysqli_fetch_array($query2)){
						echo '<h3><a href="kategori/kategori.php?id='.$data2['id'].'" data-toggle="modal" data-target="#kategori">'.$data2['kategori'].'</a><h3>';
						echo '<hr>';
					}
				?>
			</div>
		</div>
		</div>
	<?php if($data['level'] == 1){
		echo '<div class="panel-footer">
			<a href="buku/admin_addbuku.php" data-toggle="modal" data-target="#addbuku" class="btn btn-primary">Tambah Buku Baru</a>
			<a href="user/admin_adduser.php" data-toggle="modal" data-target="#adduser" class="btn btn-primary">Tambah User Baru</a>
		</div>
	</div>
	</div>';
	}
	}
	?>
</div>
<div id="pinjaman" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="pinjaman" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div id="addbuku" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addbuku" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div id="adduser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="adduser" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div id="kategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kategori" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<div id="detail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detail" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/bootstrap/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
