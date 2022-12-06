<div class="alert alert-success" role="alert">
    <h5 class="text-center text-uppercase font-weight-bold">detail siswa</h5>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <!-- <a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard/tambah_jurusan"><i class="fas fa-plus-square"></i> Tambah Jurusan</a> -->
                <a class="btn btn-danger btn-sm text-center text-uppercase font-weight-bold" href="<?= base_url() ?>Dashboard/data_siswa">Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-2">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center text-uppercase font-weight-bold">
                        <th>#</th>
                        <th>ID Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Tahun Ajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($detail_siswa as $row) {
                        ?>
                            <td class="text-center text-uppercase font-weight-bold"><?php echo $no++; ?></td>
                            <td class="text-center text-uppercase font-weight-bold"><?= $row['id_siswa']; ?></td>
                            <td class=" text-uppercase font-weight-bold"><?= $row['nama_siswa']; ?></td>
                            <td class=" text-uppercase font-weight-bold"><?= $row['jurusan']; ?></td>
                            <td class="text-center text-uppercase font-weight-bold"><?= $row['kelas']; ?></td>
                            <td class="text-center text-uppercase font-weight-bold"><?= $row['tahun_ajaran']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>