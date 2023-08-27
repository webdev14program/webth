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
                        <img src="<?= $row['gambar'] ?>" class="" alt="<?= $row['nama_kegiatan'] ?>">
                        <div class="card-body">
                            <h6 class="text-justify"><?= $row['ringkasan_kegiatan'] ?>
                                <h6 class="text-left">
                                    <a href="<?= base_url() ?>Post/detail_post/<?= $row['id_kegiatan'] ?>">Read More</a>
                                </h6>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



</section>
<!-- END section -->

<div id="map"></div>