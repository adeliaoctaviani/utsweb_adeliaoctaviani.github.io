<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/baca.jpg')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
            <img src="<?php echo base_url('assets/img/animasi.jpg')?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>



    <div class="row text-center mt-5">

        <?php foreach ($buku as $bk) : ?>

            <div class="card ml-5 mb-5 " style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$bk->gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $bk->nama_buku ?></h5>
                    <small><?php echo $bk->keterangan ?></small><br>
                    <span class="badge badge-pill badge-danger mb-3">Rp <?php echo $bk->harga ?></span><br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$bk->id_buku,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <a href="#" class="btn btn-sm btn-success">Detail</a> 
                </div>
                </div>

        <?php endforeach; ?>
    </div>
</div>