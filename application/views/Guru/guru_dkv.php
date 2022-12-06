<div class="container">
    <div class="row">
        <div class="col mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Data Guru</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <th>No</th>
                            <th>Nama Guru </th>
                            <th>Jenis Guru</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama_guru']; ?></td>
                                    <td><?php echo $row['jurusan']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>