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
                <div class="col-md mt-2 d-flex align-items-center justify-content-center mb-3">
                    <div class="card" style="width: 21rem;">
                        <div class="card-body" style="width: 300px;height:500px">
                            <h5 class="text-uppercase text-center mb-4"><?= $row['nama_kegiatan'] ?> </h5>
                            <h5 class="text-center mt-2">
                                <img src="<?= $row['gambar'] ?>" class="card-img-top" style="width: 285px;height: 235px;">
                            </h5>
                            <h6 class="text-justify"><?= $row['ringkasan_kegiatan'] ?></h6>
                        </div>
                        <div class="card-footer text-muted">
                            <h5 class="text-center">
                                <a class="btn btn-primary btn-sm text-uppercase font-weight-bold" href="<?= base_url() ?>Post/detail_post/<?= $row['id_kegiatan'] ?>">Read More</a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



</section>
<!-- END section -->

<div id="map"></div>