<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kategori"><i class="fas fa-plus fa-sm"></i>Tambah Kategori</button>

	<table class="table table-bordered">
		<tr>
			<th>ID KATEGORI</th>
			<th>NAMA KATEGORI</th>
			<th>DESKRIPSI</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php foreach ($kategori as $kat) : ?>
			<tr>
				<td><?php echo $kat->id ?></td>
				<td><?php echo $kat->nama_kategori ?></td>
				<td><?php echo $kat->deskripsi ?></td>
				<td><?php echo anchor('penjual/data_kategori/edit/' .$kat->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('penjual/data_kategori/hapus/' .$kat->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'penjual/data_kategori/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>ID Kategori</label>
        		<input type="text" name="id" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama Kategori</label>
        		<input type="text" name="nama_kategori" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Deskripsi</label>
        		<input type="text" name="deskripsi" class="form-control">
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