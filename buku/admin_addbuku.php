<div class="col-lg-12">
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>Tambah Buku Baru</strong>
	</div>
    <form action="buku/admin_newbuku.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<div class="panel-body">
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label>Nama Pengarang</label>
                <input type="text" class="form-control" name="pengarang">
            </div>
            <div class="form-group">
                <label>Nama Penerbit</label>
                <input type="text" class="form-control" name="penerbit">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                	<option value="0" selected disabled="true">--Pilih Kategori Buku--</option>
                    <option value="1">Roman</option>
                    <option value="2">Komedi</option>
                    <option value="3">Horror</option>
                    <option value="4">Edukasi</option>
                </select>
            </div>
			<div class="form-group">
				<label>Deskripsi Buku</label>
				<textarea class="form-control" rows="5" name="deskripsi" placeholder="500 kata"></textarea>
			</div>
     <div class="form-group">
                <label>Gambar Buku</label>
                <input type="file" name="picture" size="1000000" />
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