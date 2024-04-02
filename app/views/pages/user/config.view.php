<div class="card">
    <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                <i class="ti ti-user-circle me-2 fs-6"></i>
                <span class="d-none d-md-block">Cuenta</span>
            </button>
        </li>
    </ul>

    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Configurar cuenta de usuario</h5>

                                <p class="card-subtitle mb-4">
                                    Cambia tu foto de perfil desde aquí
                                </p>

                                <div class="text-center">
                                    <img src="../assets/images/profile/user-6.jpg" alt="" class="img-fluid rounded-circle" width="120" height="120" />

                                    <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <button class="btn btn-primary">Subir</button>
                                        <button class="btn btn-outline-danger">Reiniciar</button>
                                    </div>

                                    <p class="mb-0">
                                        JPG, GIF o PNG permitidos. Tamaño máximo de 800K
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Cambiar la contraseña</h5>

                                <p class="card-subtitle mb-4">
                                    Para cambiar su contraseña por favor confirme aquí
                                </p>

                                <form>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label fw-semibold">Contraseña actual</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" value="12345678910" />
                                    </div>

                                    <div class="mb-4">
                                        <label for="exampleInputPassword2" class="form-label fw-semibold">Nueva contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" value="12345678910" />
                                    </div>

                                    <div class="">
                                        <label for="exampleInputPassword3" class="form-label fw-semibold">Confirmar contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword3" value="12345678910" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card w-100 position-relative overflow-hidden mb-0">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Detalles personales</h5>
                                <p class="card-subtitle mb-4">
                                    Para cambiar tus datos personales, edítalo y guárdalo desde aquí
                                </p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="exampleInputtext" class="form-label fw-semibold">Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="exampleInputtext" class="form-label fw-semibold">Apellido</label>
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="exampleInputtext1" class="form-label fw-semibold">Documento</label>
                                                <input type="email" class="form-control" id="exampleInputtext1" placeholder="info@Xtreme.com" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Ubicación</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>United Kingdom</option>
                                                    <option value="1">United States</option>
                                                    <option value="2">United Kingdom</option>
                                                    <option value="3">India</option>
                                                    <option value="3">Russia</option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="exampleInputtext3" class="form-label fw-semibold">Telefono</label>
                                                <input type="text" class="form-control" id="exampleInputtext3" placeholder="+91 12345 65478" />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Compañia</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Compañia 1</option>
                                                    <option value="1">Compañia 2</option>
                                                    <option value="2">Compañia 3</option>
                                                    <option value="3">Compañia 4</option>
                                                    <option value="3">Compañia 5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="">
                                                <label for="exampleInputtext4" class="form-label fw-semibold">Dirección</label>
                                                <input type="text" class="form-control" id="exampleInputtext4" placeholder="814 Howard Street, 120065, India" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                                <button class="btn btn-primary">Guardar</button>

                                                <button class="btn bg-danger-subtle text-danger">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>