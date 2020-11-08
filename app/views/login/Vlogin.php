<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpustakaan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= BASE_URL; ?>assets/dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/solid.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>assets/dist/css/login.css">

        <!-- ============================================================================================== -->

        <!-- Javascript -->

        <!-- Bootstrap -->
        <script src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="background"></div>

            <div class="col-md-6 ml-auto mr-auto mt-5">
                <div class="card">
                    <form method="POST" action="<?= BASE_URL ?>login/masuk">
                    <div class="card-body">
                        <h3>Login Admin</h3>
                        <hr>
                        <div class="col-md-12 text-center">
                            <img src="<?= BASE_URL ?>assets/img/logo.png" height="100" alt="">
                        </div>
                        <div class="col-md-12 mt-5">
                            <?= Flasher::flash() ?>
                        </div>
                        <div class="input-group mb-3 mt-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white" style="background-color:#0D6050" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-white" style="background-color:#0D6050" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary" style="width:80%; background-color:#0D6050">Login</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            
        </div>
    </body>
</html>