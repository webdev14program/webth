<!-- END header -->

<section class="site-hero site-sm-hero overlay bg-primary" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
            <div class="col-md-7 text-center">

                <div class="mb-5 element-animate">
                    <h1 class="mb-2 text-uppercase font-weight-bold">Post</h1>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section element-animate">
    <div class="container" style="margin-top: -80px;">
        <div class="row">
            <?php foreach ($post as $row) : ?>

                <div class="col-md">
                    <div class="card mt-2" style="width: 350px;height:500px">
                        <div class="card-header bg-primary">
                            <h5 class="text-center text-uppercase text-white font-weight-bold" style="height: 30px ;"><?= $row['nama_kegiatan'] ?></h5>
                        </div>
                        <img src="<?= base_url() ?>assets/upload/<?= $row['gambar'] ?>" class="" alt="<?= $row['nama_kegiatan'] ?>">
                        <div class="card-body">
                            <h6 class="text-justify"><?= $row['ringkasan_kegiatan'] ?>
                                <h6 class="text-left">
                                    <a href="<?= base_url() ?>Post/detail_post/<?= $row['id_kegiatan'] ?>">Read More</a>
                                </h6>
                                <h6 class="text-right"><?= $row['date'] ?></h6>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- <div class="row mt-4 mb-4">
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url() ?>assets/upload/<?= $row['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h5 class="text-center text-uppercase text-white font-weight-bold"><?= $row['nama_kegiatan'] ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-center">
                                        <img src="<?= base_url() ?>assets/upload/<?= $row['gambar'] ?>" style="width: 320px;height: 250px;">
                                    </h5>
                                </div>
                                <div class="col-md-8">
                                    <div class="overflow-auto">
                                        <p class="text-justify overflow-auto"><?= $row['detail_kegiatan'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <p class=" text-uppercase font-weight-bold text-center"><?= $row['date'] ?></p>
                        </div>
                    </div>
                </div>
            </div> -->

</section>
<!-- END section -->

<div id="map"></div>