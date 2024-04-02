<?php
/* // Obtén la URL completa
$url_completa = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Divide la URL en partes usando el "/"
$componentes_url = explode('/', $url_completa);

// Elimina el primer elemento (que es "http:")
array_shift($componentes_url);

// Ahora $componentes_url contiene cada parte de la URL como elementos del array
foreach ($componentes_url as $item) {
    echo $item . "<br>";
} */
?>

<!-- Breadcrumb -->
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-0">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="font-weight-medium">Inicio</h4>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-primary text-decoration-none" href="/">
                                Home
                            </a>
                        </li>

                        <li class="breadcrumb-item d-flex justify-content-center align-items-center ps-0">
                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                        </li>

                        <li class="breadcrumb-item" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->