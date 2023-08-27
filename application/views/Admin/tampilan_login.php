<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Adminiistrator SMK TUnas Harapan Jakarta Barat">
	<meta name="author" content="Rahmadika S Setiawan,S.Kom">

	<title>Admin - SMK TUNAS HARAPAN</title>
	<link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">

	<!-- Custom fonts for this template-->
	<link href="<?= base_url() ?>assetsX/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-md-7">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
										<h5 class=" text-center">
											<img src="https://smkth-jakbar.com/assets/images/logo.png" alt="logo" style="width: 150px; height: 150px;">
										</h5>
										<h1 class="h4 text-gray-900 mb-4 text-uppercase font-weight-bold">Administrator <br> smk tunas harapan </h1>
									</div>
									<?= $this->session->flashdata('pesan'); ?>
									<form class="user" method="POST" action="<?= base_url() ?>Webadmin/proses_login">
										<div class=" form-group">
											<input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Enter Username ...">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url() ?>assets/admin//vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url() ?>assets/admin//vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url() ?>assets/admin//js/sb-admin-2.min.js"></script>

</body>

</html>