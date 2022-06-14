<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT KATEGORI</h3>

	<?php foreach($kategori as $kat) : ?>


	<form method="post" action="<?php echo base_url().'penjual/data_kategori/update' ?>">
		
		<div class="form-group">
			<label> Nama Kategori</label>
			<input type="text" name="nama_kategori" class="form-control" value="<?php echo $kat->nama_kategori ?>"> 
		</div>

		<div class="form-group">
			<label> Deskripsi</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $kat->id ?>"> 
			<input type="text" name="deskripsi" class="form-control" value="<?php echo $kat->deskripsi ?>"> 
		</div>


		<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

	</form>

	<?php endforeach; ?>
</div>