<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>

    <?php foreach ($buku as $bk) : ?>
        <form methode="post" action="<?php echo base_url().'admin/data_buku/update' ?>">

            <div class="for-group">
                    <label>Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="<?php echo $bk->nama_buku ?>">
                </div>

                <div class="for-group">
                    <label>Keterangan</label>
                    <input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $bk->keterangan ?>">
                </div>

                <div class="for-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $bk->kategori ?>">
                </div>

                <div class="for-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $bk->harga ?>">
                </div>

                <div class="for-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $bk->stok ?>">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        
            </form>
        
    <?php endforeach; ?>

</div>