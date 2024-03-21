<?php require_once __DIR__ . '/../utils.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<?php importBlock("head"); ?>

<body>
    <?php
    importBlock("preloader");

    echo $content;

    importBlock("modal");
    importBlock("scripts");
    ?>

    <script src="<?= URL_PATH ?><?= PAGES_PATH ?>/main.js"></script>
</body>

</html>