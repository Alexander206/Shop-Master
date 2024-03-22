<div class="datatables">

    <h1>
        Aqui estará el administrador de usuarios
    </h1>

    <!-- File export -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h5 class="mb-0">File export</h5>
                    </div>
                    <div class="table-responsive">
                        <table id="file_export" class="table border table-striped table-bordered display text-nowrap">
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

<script>
    function handleColorTheme(e) {
        $("html").attr("data-color-theme", e);
        $(e).prop("checked", !0);
    }

    document.addEventListener("DOMContentLoaded", async (event) => {
        const $table = document.getElementById("file_export").querySelector("tbody");

        const response = await fetch(`${URL_PATH}/user/listUser`);
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