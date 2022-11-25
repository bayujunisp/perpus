<!doctype html>
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
if(!empty($_GET['error'])) {
	if($_GET['error'] == 1){
		echo '<div class="alert alert-danger" role="alert"><strong>Notice :</strong> NIS dan Password kosong!</div>';
	} else if($_GET['error'] == 2){
		echo '<div class="alert alert-danger" role="alert"><strong>Notice :</strong> NIS kosong!</div>';
	} else if($_GET['error'] == 3){
		echo '<div class="alert alert-danger" role="alert"><strong>Notice :</strong> Password kosong!</div>';
	} else if($_GET['error'] == 4){
		echo '<div class="alert alert-danger" role="alert"><strong>Notice :</strong> NIS dan Password tidak terdaftar</div>';
	}
}	
?>
<div class="row">
<?php

	include 'login/login.php';
	include 'login/config.php';
?>	
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
						echo '<a data-toggle="modal" data-target="#detail" href="buku/index_detail.php?id='.$data1['id'].'"><img src="'.$data1['picture'].'" height="150" width="100"></a>&nbsp;&nbsp;';
					}
				?>
			</div>
			<div class="tab-pane" id="category">
				<?php
					$query2= mysqli_query($koneksi,"SELECT * FROM kategori") or die(mysqli_error($koneksi));
					
					while($data2 = mysqli_fetch_array($query2)){
						echo '<h3><a href="kategori/index_kategori.php?id='.$data2['id'].'" data-toggle="modal" data-target="#kategori">'.$data2['kategori'].'</a><h3>';
						echo '<hr>';
					}
				?>
			</div>
		</div>
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