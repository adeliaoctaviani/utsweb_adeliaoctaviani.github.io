<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm"></i>Tambah</button>

    <div class="navbar-form  navbar-right navbar-sm mb-3">
      <?php echo form_open ('admin/search')?>
      <input type="text" name="keyword" class="form-control mb-2" placeholder="Search">
      <button type="submit" class="btn btn-success btn-sm">Cari</button>
      <?php echo form_close() ?>
    </div>

    <table class="table table-border">
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        foreach($buku as $bk) : ?>

        <tr>
            <td><?php echo $bk->id_buku ?></td>
            <td><?php echo $bk->nama_buku ?></td>
            <td><?php echo $bk->keterangan ?></td>
            <td><?php echo $bk->kategori ?></td>
            <td><?php echo $bk->harga ?></td>
            <td><?php echo $bk->stok ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor('admin/data_buku/edit/' .$bk->id_buku, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_buku/hapus/' .$bk->id_buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT PRODUK</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_buku/tambah_aksi'?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="nama_buku" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>
