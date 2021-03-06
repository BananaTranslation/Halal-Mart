<div class='container-fluid'>
	<div class="card">
  		<h5 class="card-header">Detail Produk</h5>
  			<div class="card-body">

  				<?php foreach($produk as $pdk): ?>

    			<div class="row">
    				<div class="col-md-4">
    					<img src="<?php echo base_url(). '/uploads/' .$pdk->gambar ?>" class="card-img-top">
    				 </div>
    				<div class="col-md-8"> 
    					<table class="table">
    						<tr>
    							<td>Nama Produk</td>
    							<td><strong> <?php echo $pdk->nama_produk?></strong></td>
    						</tr>
    						<tr>
    							<td>Keterangan</td>
    							<td><strong> <?php echo $pdk->deskripsi?></strong></td>
    						</tr>	
    						<tr>
    							<td>Kategori</td>
    							<td><strong> <?php echo $pdk->id_kategori?></strong></td>
    						</tr>
    						<tr>
    							<td>Stok</td>
    							<td><strong> <?php echo $pdk->stok?></strong></td>
    						</tr>
    						<tr>
    							<td>Harga</td>
    							<td><strong><div class="btn btn-sm btn-success">Rp <?php echo number_format($pdk->harga,0,',',',') ?></div></strong></td>
    						</tr>
    					</table>
    					<?php echo anchor('pembeli/dashboard_pembeli/pesan/' .$pdk->id_produk, '<div class="btn btn-sm btn-primary">Tambah Pesanan</div>') ?>
    					<?php echo anchor('pembeli/dashboard_pembeli/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
    				</div>
  				</div>
  				<?php endforeach; ?>
			</div>
	</div>
</div>