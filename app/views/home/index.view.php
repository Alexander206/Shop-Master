<div id="main-wrapper">
    <!--  Sidebar End -->
    <div class="page-wrapper" style="margin-left: 0;">
        <div class=" body-wrapper">
            <div class=" container-fluid" style="max-width: 1500px">
                <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
                    <div class="card-body px-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-medium">Datatable Advanced</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-primary text-decoration-none" href="./index.html">Home </a>
                                        </li>
                                        <li
                                            class="breadcrumb-item d-flex justify-content-center align-items-center ps-0">
                                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">Datatable Advanced</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="datatables">
                    <!-- File export -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <h5 class="mb-0">File export</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="file_export"
                                            class="table border table-striped table-bordered display text-nowrap">
                                            <thead>
                                                <!-- start row -->
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Documento</th>
                                                    <th>Código de pais</th>
                                                    <th>Celular</th>
                                                    <th>Contraseña</th>
                                                    <th>Rol id</th>
                                                    <th>Empresa id</th>
                                                </tr>
                                                <!-- end row -->
                                            </thead>

                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleColorTheme(e) {
            $("html").attr("data-color-theme", e);
            $(e).prop("checked", !0);
        }

        document.addEventListener("DOMContentLoaded", async (event) => {
            const $table = document.getElementById("file_export").querySelector("tbody");

            const response = await fetch(`${URL_PATH}/user/list`);
            const res = await response.json();

            const element = res.result.map((item) => {
                return `<tr>
                        <td>${item.name}</td>
                        <td>${item.last_name}</td>
                        <td>${item.document}</td>
                        <td>${item.country_phone}</td>
                        <td>${item.phone}</td>
                        <td style="width: 200px">${item.password}</td>
                        <td>${item.role_id}</td>
                        <td>${item.companie_id}</td>
                        </tr>`;
            });

            $table.innerHTML = element;

        })
    </script>
</div>

<script src="<?= URL_PATH ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="<?= URL_PATH ?>/assets/js/datatable/datatable-advanced.init.js"></script>
</body>

</html>