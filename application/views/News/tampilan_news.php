<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/1.jpg);">
  <div class="container">
    <div class="row align-items-center justify-content-center site-hero-sm-inner">
      <div class="col-md-7 text-center">

        <div class="mb-5 element-animate">
          <h1 class="mb-2">Our News</h1>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END section -->
<!-- <div class="container">
  <div class="row mt-4">
    <div class="col">
      <a href="" class="btn btn-primary">PHOTO</a>
    </div>
    <div class="col">
      <a href="" class="btn btn-primary">PHOTO</a>
    </div>
    <div class="col">
      <a href="" class="btn btn-primary">PHOTO</a>
    </div>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-md-4 mt-4">
      <!--  -->

      <div class="card">
        <div class="card-header">
          <h5>Menu</h5>
        </div>
        <div class="card-body">
          <div class="alert alert-light" role="alert">
            <ul>
              <li>News</li>
              <li>Photo</li>
              <li>Video</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 shadow">

      <?php foreach ($data as $row) : ?>
        <div class="row">
          <div class="col-md mt-4">
            <div class="card">
              <div class="card-header">
                <h4><?= $row['judul'] ?></h4>
              </div>
              <div class="card-body">
                <h5 class="text-justify"><?= $row['isi'] ?></h5>
                <p class="text-right"><?= $row['date'] ?></p>
              </div>
            </div>
          </div>
        </div>


      <?php endforeach; ?><br>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>


<div class="py-5 block-22">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0 pr-md-5 ">
        <h2 class="heading">Create cool websites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.</p>
      </div>
      <div class="col-md-6">
        <form action="#" class="subscribe">
          <div class="form-group">
            <input type="email" class="form-control email" placeholder="Enter email">
            <input type="submit" class="btn btn-primary submit" value="Subscribe">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>