<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pemesan</th>
			<th>Tanggal Pembayaran</th>
			<th>Batas Pembayaran</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $inv->id_invoice ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('penjual/invoice/detail/' .$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
				<td><?php echo anchor('penjual/invoice/hapus/' .$inv->id_invoice, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>