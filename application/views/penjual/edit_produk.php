<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT PRODUK</h3>

	<?php foreach($produk as $pdk) : ?>


	<form method="post" action="<?php echo base_url().'penjual/data_produk/update' ?>">
		
		<div class="form-group">
			<label> Nama Produk</label>
			<input type="text" name="nama_produk" class="form-control" value="<?php echo $pdk->nama_produk ?>"> 
		</div>

		<div class="form-group">
			<label> Deskripsi</label>
			<input type="hidden" name="id_produk" class="form-control" value="<?php echo $pdk->id_produk ?>"> 
			<input type="text" name="deskripsi" class="form-control" value="<?php echo $pdk->deskripsi ?>"> 
		</div>

		<div class="form-group">
			<label> Kategori</label>
			<input type="text" name="id_kategori" class="form-control" value="<?php echo $pdk->id_kategori ?>"> 
		</div>

		<div class="form-group">
			<label> Harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $pdk->harga ?>"> 
		</div>

		<div class="form-group">
			<label> Stok</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $pdk->stok ?>"> 
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

	</form>

	<?php endforeach; ?>
</div>