<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="text-uppercase text-white font-weight-bold"><?= $post['nama_kegiatan'] ?></h4>
        </div>
        <div class="card-body">
            <h5 class="text-center">
                <img src="<?= base_url() ?>assets/upload/<?= $post['gambar'] ?>" class="img-fluid" alt="<?= $post['nama_kegiatan'] ?>" style="width: 600px;height:400px">
            </h5>
            <span>
                <?= $post['detail_kegiatan'] ?>
            </span>
        </div>
    </div>
</div>