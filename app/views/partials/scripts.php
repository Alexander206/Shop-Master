<script src="<?= URL_PATH ?>/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= URL_PATH ?>/assets/js/app.min.js"></script>
<script src="<?= URL_PATH ?>/assets/js/app.horizontal.init.js"></script>
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
<script src="<?= URL_PATH ?>/assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="<?= URL_PATH ?>/assets/js/forms/mask.init.js"></script>

<script>
    const URL_PATH = '<?= URL_PATH ?>';

    function handleColorTheme(e) {
        $("html").attr("data-color-theme", e);
        $(e).prop("checked", !0);
    }
</script>