<!doctype html>
<html lang="en">

<head>
  <title>SMK Tunas Harapan</title>
  <link rel="icon" href="<?= base_url() ?>assets/images/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">

  <!-- Google Font -->

  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  <style>
    h2.text-popular {
      font-family: 'Lobster', cursive;
    }

    h5.text-footer {
      font-family: 'Roboto Slab', serif;
    }
  </style>

  <!-- Icon Ion -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" /> -->
  <!-- <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@4.7.4/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@4.7.4/dist/ionicons/ionicons.js"></script> -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme Style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body class="bg-light">

  <header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand absolute" href="<?= base_url() ?>">SMK Tunas Harapan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">TEFA</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jurusan</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?= base_url() ?>Jurusan/tkj">TKJ</a>
                <a class="dropdown-item" href="<?= base_url() ?>Jurusan/ak">Akutansi</a>
                <a class="dropdown-item" href="<?= base_url() ?>Jurusan/pm">Pemasaran</a>
                <a class="dropdown-item" href="<?= base_url() ?>Jurusan/ap">Adm.Perkantoran</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Teachers</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="<?= base_url() ?>Guru/TKJ">TKJ</a>
                <a class="dropdown-item" href="<?= base_url() ?>Guru/AK">Akutansi</a>
                <a class="dropdown-item" href="<?= base_url() ?>Guru/PM">Pemasaran</a>
                <a class="dropdown-item" href="<?= base_url() ?>Guru/AP">Adm.Perkantoran</a>
                <a class="dropdown-item" href="<?= base_url() ?>Guru/Umum">Umum</a>
                <!-- <a class="dropdown-item" href="#">Mapel Kel. B</a> -->
              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>News/AllPosting">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>Contact">Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->
          </ul>
          <ul class="navbar-nav absolute-right">
            <li>
              <a class="btn btn-primary" href="<?= base_url() ?>Login">Login</a>

            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>