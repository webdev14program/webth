<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assetsX/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assetsX/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form method="POST" action="<?= base_url() ?>Login/save">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="id" name="id" class="form-control">
                                    <label>ID Siswa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="jurusan" name="jurusan" class="form-control">
                                    <label>Jurusan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md">
                                <div class="form-label-group">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                    <label>Nama Siswa</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="username" name="username" class="form-control">
                                    <label>Username</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="password" name="password" class="form-control">
                                    <label>Password</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-block ">Submit</button>
                </form>
                <div class="text-center">
                    <a href="<?= base_url() ?>Login">
                        <h6 class="text-center mt-4">Login Page</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assetsX/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assetsXvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assetsX/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>