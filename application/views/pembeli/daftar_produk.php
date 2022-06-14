<div class="container-fluid">

    <div class="row text-center mt-3 mb-3">
        <?php foreach ($produk as $pdk) : ?>

            <div class="class-card ml-3 mt-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/' .$pdk->gambar ?>" class="card-img-top" alt="...">
                <div class="class-card-body">
                    <h5 class="card-title mb-1"><?php echo $pdk->nama_produk ?></h5>
                    <small><?php echo $pdk->deskripsi ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp <?php echo number_format($pdk->harga, 0,',','.') ?></span><br>
                    <?php echo anchor('pembeli/daftar_produk/pesan/' .$pdk->id_produk, '<div class="btn btn-sm btn-primary">Tambah Pesanan</div>') ?>
                    <?php echo anchor('pembeli/daftar_produk/detail/' .$pdk->id_produk, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>