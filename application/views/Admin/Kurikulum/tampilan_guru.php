<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Guru</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Kode Guru</th>
                    <th>Nama Guru </th>
                    <th>Jenis Guru</th>
                    <th>Aksi</th>

                </thead>

                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($data as $row) {
                            ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['kode']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['guru']; ?></td>
                            <td>
                                <a href="<?= base_url() ?><?= $row['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>