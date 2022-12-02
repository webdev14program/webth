<div class="row">
    <div class="col-md mb-3">
        <div class="card">
            <div class="card-body">
                <!-- <a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard/tambah_jurusan"><i class="fas fa-plus-square"></i> Tambah Jurusan</a> -->
                <a class="btn btn-danger btn-sm text-white font-weight-bold text-uppercase" href="<?= base_url() ?>Dashboard/post">Kembali</a>
                <button type="button" class="btn btn-primary btn-sm font-weight-bold text-uppercase" data-toggle="modal" data-target="#exampleModal">
                    Upload Gambar Post
                </button>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="text-center text-uppercase text-white font-weight-bold"><?= $detail_post['nama_kegiatan'] ?></h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">
                            <img src="<?= base_url() ?>assets/upload/<?= $detail_post['gambar'] ?>" style="width: 400px;height: 300px;">
                        </h5>
                    </div>
                </div>

            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <p><?= $detail_post['ringkasan_kegiatan'] ?></p>
                        <br>
                    </div>
                    <div class="card-footer text-muted">
                        <p><?= $detail_post['date'] ?></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md mt-2">
                <div class="card">
                    <div class="card-body">
                        <p><?= $detail_post['detail_kegiatan'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white font-weight-bold">
                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar Post</h5>
            </div>
            <div class="modal-body">
                <form method='post' action='<?= base_url() ?>Dashboard/upload_post_gambar' enctype='multipart/form-data'>
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <input type="text" name="id_kegiatan" value="<?= $detail_post['id_kegiatan'] ?>" hidden>
                        <div class="form-group">
                            <input type="file" name="gambar[]" class="form-control-file" name="file" required>
                        </div>
                    <?php endfor; ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="Upload" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>