<div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
        <div class="position-relative z-3">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="<?= URL_PATH ?>/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
                            <!-- Light Logo text -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                        </span>
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                        <img src="<?= URL_PATH ?>/assets/images/background/login-security.svg" alt="" class="img-fluid" width="600">
                    </div>
                </div>

                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="auth-max-width  col-sm-8 col-md-6 col-xl-9">
                            <h2 class="mb-1 fs-7 fw-bolder">Bienvenidos a Shop Master</h2>
                            <p class=" mb-4">tu administrador de ventas</p>

                            <form id="registerForm" method="post">
                                <div class="mb-3">
                                    <label for="inputName" class="form-label">Nombre</label>
                                    <input id="inputName" class="form-control" name="inputName" type="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputLastname" class="form-label">Apellido</label>
                                    <input id="inputLastname" class="form-control" name="inputLastname" type="lastname" required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputDocument" class="form-label">Numero de documento</label>
                                    <input id="inputDocument" class="form-control" name="inputDocument" type="doc" required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputPhone" class="form-label">Telefono</label>

                                    <div class="row login_input_phone" id="inputPhone">
                                        <input id="inputPhoneNumber" class="form-control col-auto" name="inputPhoneNumber" type="tel" required>

                                        <div>
                                            <img id="imageCountryPhone" src="<?= URL_PATH ?>/assets/images/svgs/flag.svg" alt="">
                                            <input list="optionsList" id="inputCountryPhone" class="form-control col" name="inputCountryPhone" required>
                                            <datalist id="optionsList"></datalist>
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Contraseña</label>
                                    <input id="inputPassword" class="form-control" name="inputPassword" type="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputConfirmPassword" class="form-label">Confirmar contraseña</label>
                                    <input id="inputConfirmPassword" class="form-control" name="inputConfirmPassword" type="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Iniciar sesión</button>

                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">¿Ya tienes una cuenta?</p>
                                    <a class="text-primary fw-medium ms-2" href="<?= URL_PATH ?>/user/login">Inicia sesión</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL_PATH ?>/assets/js/pages/register.js"></script>