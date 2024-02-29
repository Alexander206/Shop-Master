<?php

/* include "../../../utils/userUtils.php"; */

/* $userUtils = new UserUtils(__DIR__);
$userUtils->validation_redirect('/home/dashboard.php'); */

$json_data = file_get_contents('../../../config/general_data.config.json');
$data = json_decode($json_data, true);
$nameSite = $data["nameSite"];

$loginError = isset($_GET['loginError']) ? $_GET['loginError'] : null;

if ($loginError) {
?>
    <script>
        window.onload = function() {
            $('#loginErrorModal').modal('show');
        };
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../../../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../../../assets/css/styles.css" />

    <title><?php echo $nameSite ?></title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../../../assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body p-5">
                                <a href="../minisidebar/index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <b class="logo-icon">
                                        <!-- Dark Logo icon -->
                                        <img src="../../../assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                                        <!-- Light Logo icon -->
                                        <img src="../../../assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                                    </b>

                                    <span class="logo-text">
                                        <!-- dark Logo text -->
                                        <img src="../../../assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
                                        <!-- Light Logo text -->
                                        <img src="../../../assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                                    </span>
                                </a>

                                <form action="../../../controllers/userControler.php" method="post">
                                    <div class="mb-3">
                                        <label for="inputUser" class="form-label">Numero de documento</label>
                                        <input type="doc" name="userData[user]" class="form-control" id="inputUser" aria-describedby="emailHelp" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="inputPassword" class="form-label">Contraseña</label>
                                        <input type="password" name="userData[password]" class="form-control" id="inputPassword" required>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <a class="text-primary fw-medium" href="./forgot-password.php">¿Olvidaste tu contraseña?</a>
                                    </div>

                                    <button type="submit" name="loginSubmit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Iniciar sesión</button>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">Eres nuevo?</p>
                                        <a class="text-primary fw-medium ms-2" href="./registrer.php">Crea una cuenta</a>
                                    </div>
                                </form>

                                <!-- Modal -->
                                <div class="modal fade" id="loginErrorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginErrorModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="loginErrorModalLabel">Error al iniciar sesión</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Usuario o contraseña incorrectos. Porfavor verifica mayusculas, minusculas y carácteres especiales.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/js/app.min.js"></script>
    <script src="../../../assets/js/app.minisidebar.init.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="../../../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <script src="../../../assets/js/theme.js"></script>
    <script src="../../../assets/js/feather.min.js"></script>
    <script src="../../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>

</body>

</html>