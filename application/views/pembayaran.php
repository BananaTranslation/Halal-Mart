<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php $grand_total = 0;
					if ($keranjang = $this->cart->contents())
					{
						foreach ($keranjang as $item)
						{
							$grand_total = $grand_total + $item['subtotal'];
						}
					echo "<h4>Total Pesanan Anda: Rp " .number_format($grand_total, 0,',','.');
					?>
			</div><br><br>

			<h3>Input Data User dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
				
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan" placeholder="Pekerjaan Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Tipe Bayar</label>
					<select class="form-control">
						<option>Tunai</option>
						<option>Kredit</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BRI - XXXXXXX</option>
						<option>BCA - XXXXXXX</option>
						<option>BNI - XXXXXXX</option>
						<option>BCA - XXXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

			</form>

			<?php  

			}else echo "<h4>Keranjang Pesanan Anda Masih Kosong";

			?>
		</div>

		
		<div class="col-md-2"></div>	
	</div>
</div>