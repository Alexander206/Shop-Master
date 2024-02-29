<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="<?= URL_PATH ?>/assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/styles.css" />
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/libs/prismjs/themes/prism-okaidia.min.css" />

    <title><?= NAME_SITE ?></title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="<?= URL_PATH ?>/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <?php echo $content ?>

    <div class="dark-transparent sidebartoggler"></div>

    <script src="<?= URL_PATH ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/app.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/app.init.js"></script>
    <script src="<?= URL_PATH ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/sidebarmenu.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/theme.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/feather.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/breadcrumb/breadcrumbChart.js"></script>
    <script src="<?= URL_PATH ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- End JS -->
</body>

</html>