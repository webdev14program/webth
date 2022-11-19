<!-- END header -->

<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(<?= base_url() ?>assets/images/1.jpg);">
    <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
            <div class="col-md-7 text-center">

                <div class="mb-5 element-animate">
                    <h1 class="mb-2"><?= $guru ?></h1>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<?php $this->load->view($content); ?>