<div id="main-wrapper">
  <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
    <div class="position-relative z-3">
      <div class="row">
        <div class="col-lg-6 col-xl-8">
          <a href="<?= URL_PATH ?>/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="<?= URL_PATH ?>/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
              <!-- Light Logo icon -->
              <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
            </b>

            <span class="logo-text">
              <!-- dark Logo text -->
              <img src="<?= URL_PATH ?>/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
              <!-- Light Logo text -->
              <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
            </span>
          </a>
          <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
            <img src="<?= URL_PATH ?>/assets/images/background/login-security.svg" alt="" class="img-fluid" width="600">
          </div>
        </div>

        <div class="col-lg-6 col-xl-4">
          <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
            <div class="auth-max-width mx-auto d-flex align-items-center w-100 h-100">
              <div class="card-body">
                <div class="mb-5">
                  <h2 class="fw-bolder fs-7 mb-3">Olvidaste tu contraseña?</h2>
                  <p class="mb-0 ">
                    Ingrese la dirección de correo electrónico asociada con su cuenta y le enviaremos un enlace por
                    correo electrónico para restablecer su contraseña.
                  </p>
                </div>

                <form id="loginForm" method="post">
                  <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo electrónico</label>
                    <input id="inputEmail" class="form-control" name="inputEmail" type="email" required>
                  </div>

                  <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-3">Recuperar contraseña</a>
                  <a href="./authentication-login.html" class="btn bg-primary-subtle text-primary w-100 py-8">Iniciar
                    sesión</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>