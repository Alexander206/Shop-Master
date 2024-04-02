<?php require_once __DIR__ . '/../utils.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<?php importBlock("head"); ?>

<body>
    <div id="main-wrapper">

        <?php
        importBlock("preloader");
        ?>

        <div class="page-wrapper">
            <?php
            importBlock("header");
            ?>

            <div class="body-wrapper">
                <div class="container-fluid">

                    <?php

                    importBlock("breadcrumb");

                    echo $content;

                    importBlock("modal");
                    importBlock("scripts");
                    ?>
                </div>
            </div>

            <?php importBlock("footer") ?>
            <?php importBlock("searchBar") ?>
        </div>
    </div>

    <script src="<?= URL_PATH ?><?= PAGES_PATH ?>/main.js"></script>
</body>

</html>