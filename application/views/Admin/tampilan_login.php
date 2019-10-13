<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMK Tunas Harapan</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assetsX/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assetsX/css/sb-admin.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <div class="container">
        <h2 class="text-center text-white mt-3">SMK Tunas Harapan</h2>
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center">Form Login</div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url(); ?>Login/getlogin" onsubmit="return cekform();">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="username" id="username" class="form-control">
                            <label>User Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control">
                            <label>Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-block ">Login</button>
                </form>
                <a href="<?= base_url() ?>Login/register">
                    <h6 class="text-center mt-4">Register Siswa</h6>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript">
        function cekform() {
            if (!$("#username").val()) {
                alert('Maaf Username Tidak Boleh Kosong');
                $("#username").focus();
                return false;
            }
            if (!$("#password").val()) {
                alert('Maaf Password Tidak Boleh Kosong');
                $("#password").focus();
                return false;
            }
        }
    </script>
</body>

</html>