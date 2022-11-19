<div class="col-md-8 shadow">

    <?php foreach ($data as $row) : ?>
        <div class="row">
            <div class="col-md mt-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white"><?= $row['judul'] ?></h4>
                    </div>
                    <div class="card-body">
                        <h5 class="text-justify"><?= $row['isi'] ?><a href="#"> more....</a></h5>

                        <p class="text-right"><?= $row['date'] ?></p>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?><br>
    <?= $this->pagination->create_links(); ?>
</div>