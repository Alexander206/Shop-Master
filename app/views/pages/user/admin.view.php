<div class="card w-100 position-relative overflow-hidden">
    <div class="px-4 py-3 border-bottom">
        <h5 class="card-title fw-semibold mb-0 lh-sm">Administrador de clientes</h5>
    </div>



    <div class="card-body p-4">
        <div class="table-responsive rounded-2 mb-4">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-4 d-flex align-items-center gap-3">
                        <img src="../assets/images/profile/user-0.png" alt="" class="rounded-circle" width="40" height="40">

                        <div>
                            <h5 class="fw-semibold mb-0">Nuevo Usuario</h5>
                            <span class="fs-2 d-flex align-items-center">
                                Compañia
                            </span>
                        </div>

                        <a href="/user/register" class="btn btn-primary py-1 px-2 ms-auto">Crear</a>
                    </div>
                </div>
            </div>

            <table id="tableUsersAdmin" class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">ID</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Usuario</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Documento</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Rol</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Dirección</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Teléfono</h6>
                        </th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <h6 class="fs-4 fw-semibold mb-0">1</h6>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge text-bg-primary rounded-3 fw-semibold fs-2">Design</span>
                                <span class="badge text-bg-secondary rounded-3 fw-semibold fs-2">Product</span>
                            </div>
                        </td>

                        <td>
                            <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                        </td>

                        <td>
                            <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                        </td>

                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-6"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?= URL_PATH ?><?= PAGE_USER ?>/admin.js"></script>