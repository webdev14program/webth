<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Data Siswa</h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <form action="<?= base_url() ?>Administrator/Siswa" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Pencarian Siswa" name="keyword" autocomplete="off">
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="submit"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Nama Siswa </th>
                        <th>Jurusan</th>
                        <th>Aksi</th>

                    </thead>

                    <tbody>
                        <tr>
                            <?php
                            $no = ++$start;
                            foreach ($data as $row) {
                                ?>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['jurusan']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>Kurikulum/detail/<?= $row['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>