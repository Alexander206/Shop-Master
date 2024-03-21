<!-- Main conten -->
<div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
        <div class="position-relative z-3">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="<?= URL_PATH ?>/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage"
                                class="light-logo" />
                        </b>

                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" alt="homepage"
                                class="dark-logo ps-2" />
                            <!-- Light Logo text -->
                            <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" class="light-logo ps-2"
                                alt="homepage" />
                        </span>
                    </a>

                    <div class="d-none d-xl-flex align-items-center justify-content-center"
                        style="height: calc(100vh - 80px);">
                        <img src="<?= URL_PATH ?>/assets/images/background/login-security.svg" alt="" class="img-fluid"
                            width="600">
                    </div>
                </div>

                <div class="col-xl-5 col-xxl-4">
                    <div
                        class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="auth-max-width col-sm-8 col-md-6 col-xl-9">

                            <h2 class="mb-1 fs-7 fw-bolder">Bienvenidos a Shop Master</h2>
                            <p class=" mb-4">tu administrador de ventas</p>

                            <form id="loginForm" method="post">
                                <div class="mb-3">
                                    <label for="inputDocument" class="form-label">Numero de documento</label>
                                    <input id="inputDocument" class="form-control" name="inputDocument" type="doc"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Contraseña</label>
                                    <input id="inputPassword" class="form-control" name="inputPassword" type="password"
                                        required>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <a class="text-primary fw-medium" href="<?= URL_PATH ?>/user/recover">¿Olvidaste tu
                                        contraseña?</a>
                                </div>

                                <button type="submit" name="loginSubmit"
                                    class="btn btn-primary w-100 py-8 mb-4 rounded-2">Iniciar sesión</button>

                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-medium">Eres nuevo?</p>
                                    <a class="text-primary fw-medium ms-2" href="<?= URL_PATH ?>/user/register">Crea una
                                        cuenta</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL_PATH ?><?= PAGE_USER?>/login.js"></script>