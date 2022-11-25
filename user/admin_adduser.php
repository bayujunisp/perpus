<div class="col-lg-12">
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>Buat user baru</strong>
	</div>
	<form action="user/admin_newuser.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
        <div class="form-group">
            <label>NIS</label>
            <input type="text" class="form-control" name="nis">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Verifikasi Password</label>
            <input type="password" class="form-control" placeholder="Masukkan lagi password anda" name="verpass">
        </div>
        <div class="form-group">
            <label>Nama User</label>
            <input type="text" class="form-control" name="nama">
        </div>
	    <div class="form-group">
	        <label>Jabatan User</label>
	        <select name="kategori" class="form-control">
	        	<option value="0" selected disabled="true">--Pilih Jabatan User--</option>
	            <option value="1">Administrator</option>
	            <option value="2">Pengunjung</option>
	        </select>
	    </div>
	</div>
	<div class="panel-footer">
			<input type="submit" value="Submit" class="btn btn-primary">
			<input type="reset" value="Reset" class="btn btn-default">
			<a href="profile.php" class="btn btn-success">Back</a>
	</div>
	</form>		
</div>
</div>