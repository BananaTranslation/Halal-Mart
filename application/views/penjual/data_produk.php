<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i>Tambah Produk</button>

	<table class="table table-bordered">
		<tr>
			<th>ID PRODUK</th>
			<th>NAMA PRODUK</th>
			<th>KATEGORI</th>
			<th>DESKRIPSI</th>
			<th>STOK</th>
			<th>HARGA</th>
			<th>NAMA TOKO</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php foreach ($produk as $pdk) : ?>
			<tr>
				<td><?php echo $pdk->id_produk ?></td>
				<td><?php echo $pdk->nama_produk ?></td>
				<td><?php echo $pdk->id_kategori ?></td>
				<td><?php echo $pdk->deskripsi ?></td>
				<td><?php echo $pdk->stok ?></td>
				<td><?php echo $pdk->harga ?></td>
				<td><?php echo $pdk->nama_toko ?></td>
				<td><?php echo anchor('penjual/data_produk/detail/' .$pdk->id_produk, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('penjual/data_produk/edit/' .$pdk->id_produk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('penjual/data_produk/hapus/' .$pdk->id_produk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'penjual/data_produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>ID Produk</label>
        		<input type="text" name="id_produk" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama Produk</label>
        		<input type="text" name="nama_produk" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Deskripsi</label>
        		<input type="text" name="deskripsi" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        			<input type="text" name="id_kategori" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama Toko</label>
        		<select class="form-control" id="nama_toko" name="nama_toko">
   							<option selected="0">select..</option>
   								<?php foreach ($produk as $pdk) : ?>
    							<option value="<?php echo $pdk->nama_toko;?>"> <?php echo $pdk->nama_toko; ?></option>
  								<?php endforeach; ?>
 							</select>
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>

    </div>
  </div>
</div>