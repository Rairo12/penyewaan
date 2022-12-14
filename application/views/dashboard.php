<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 19rem;">
                <img src="<?php echo  base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo  $brg->nama_brg ?></h5>
                    <small class="card-title"><?php echo  $brg->keterangan ?></small> <br>
                    <span class="badge badge-pill badge-success mb-3">Rp.<?php echo  $brg->harga ?>/hari</span>
                    <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                    <a href="#" class="btn btn-success">Detail</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>