<div class="container-fluid">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('/assets/img/hni.png') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('/assets/img/hni.png') ?>" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    <div class="row text-center mt-3 mb-3">
        <?php foreach ($produk as $pdk) : ?>

            <div class="class-card ml-3 mt-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/' .$pdk->gambar ?>" class="card-img-top" alt="...">
                <div class="class-card-body">
                    <h5 class="card-title mb-1"><?php echo $pdk->nama_produk ?></h5>
                    <small><?php echo $pdk->deskripsi ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp <?php echo number_format($pdk->harga, 0,',','.') ?></span><br>
                    <?php echo anchor('dashboard/pesan/' .$pdk->id_produk, '<div class="btn btn-sm btn-primary">Tambah Pesanan</div>') ?>
                    <?php echo anchor('dashboard/detail/' .$pdk->id_produk, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>