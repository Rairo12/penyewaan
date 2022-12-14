<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA PAKAIAN</h3>

    <?php foreach ($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url() .'/admin/data_barang/update' ?>"></form>

        <div class="for-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form_control" value="<?php echo $brg->nama_brg ?>">
        </div>

        <div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_brg" class="form_control" value="<?php echo $brg->id_brg ?>">
            <input type="text" name="keterangan" class="form_control" value="<?php echo $brg->keterangan ?>">
        </div>

        <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form_control" value="<?php echo $brg->kategori ?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form_control" value="<?php echo $brg->harga ?>">
        </div>

        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form_control" value="<?php echo $brg->stok ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>

    <?php endforeach; ?>
</div>