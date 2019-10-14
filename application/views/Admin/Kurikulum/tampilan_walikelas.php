<div class="card mb-3">
    <div class="card-header">
        <h5 class="fas fa-table"> Data Wali Kelas</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Nama Guru </th>
                    <th>Kelas</th>
                    <th>Aksi</th>

                </thead>

                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($data as $row) {
                            ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['kelas']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>Kurikulum/edit/<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>