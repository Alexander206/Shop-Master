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
                <form class="row" id="configUserForm">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Configurar usuario</h5>

                                <p class="card-subtitle mb-4">
                                    Cambia tu foto de perfil desde aquí
                                </p>

                                <div class="text-center">
                                    <img id="image_profile" src="<?= URL_PATH ?>/assets/images/profile/user-0.png" alt="" class="img-fluid rounded-circle" width="120" height="120" />

                                    <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <label for="image" class="btn btn-primary">Subir</label>
                                        <input type="file" name="image" id="image" style="display: none;">
                                    </div>

                                    <p class="mb-0">
                                        JPG, GIF o PNG permitidos. Tamaño máximo de 800K
                                    </p>
                                </div>

                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <h4 class="fw-semibold mb-3">Fotos de perfil prediseñadas</h4>
                                        <div class="row">
                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-1.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-2.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-3.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-4.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-5.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-6.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-7.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-8.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-9.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-10.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-11.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>

                                            <div class="col-3 p-2">
                                                <button class="bg-transparent border-0 m-0 p-0">
                                                    <img src="<?= URL_PATH ?>/assets/images/profile/user-12.jpg" alt="" class="rounded-2 img-fluid m-0">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">

                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Detalles personales</h5>
                                <p class="card-subtitle mb-4">
                                    Para cambiar tus datos personales, edítalo y guárdalo desde aquí
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="name" class="form-label fw-semibold">Nombre</label>
                                                <input type="name" class="form-control" name="name" id="name" placeholder="" autocomplete="given-name" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="last_name" class="form-label fw-semibold">Apellido</label>
                                                <input type="lastname" class="form-control" name="last_name" id="last_name" placeholder="" autocomplete="family-name" />
                                            </div>

                                            <div class="mb-4">
                                                <label for="document" class="form-label fw-semibold">Documento</label>
                                                <input type="text" class="form-control" name="document" id="document" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Ubicación</label>

                                                <div class="row edit_input_phone">
                                                    <img class="" id="country_image" src="<?= URL_PATH ?>/assets/images/svgs/flag.svg" alt="">

                                                    <select class="form-select" name="country_phone" id="country_phone" aria-label="Default select example">
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="phone" class="form-label fw-semibold">Telefono</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="" />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Compañia</label>

                                                <select class="form-select" name="companie_id" id="companie_id" aria-label="Default select example">
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
                                                <label for="address" class="form-label fw-semibold">Dirección</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Cambiar la contraseña</h5>

                                <p class="card-subtitle mb-4">
                                    Para cambiar su contraseña por favor confirme aquí
                                </p>

                                <div>
                                    <div class="mb-4">
                                        <label for="current_password" class="form-label fw-semibold">Contraseña actual</label>
                                        <input type="password" class="form-control" name="current_password" id="current_password" value="12345678910" />
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label fw-semibold">Nueva contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" value="12345678910" />
                                    </div>

                                    <div class="">
                                        <label for="confirm_password" class="form-label fw-semibold">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="12345678910" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                        <input type="submit" class="btn btn-primary" value="Guardar"></input>

                                        <button class="btn bg-danger-subtle text-danger">
                                            Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", async () => {
        const urlParams = new URLSearchParams(window.location.search);
        const idUser = urlParams.get("id");

        let countriesRes = await fetch(`<?= URL_PATH ?>/document/countries`);
        let countriesResponse = await countriesRes.json();

        let companiesRes = await fetch(`<?= URL_PATH ?>/company/list`);
        let companiesResponse = await companiesRes.json();

        let user;
        let userResponse;

        if (idUser !== null) {
            let userRes = await fetch(`<?= URL_PATH ?>/user/get?id=${idUser}`);

            userResponse = await userRes.json();
            user = userResponse.result;
        } else {
            let userRes = await fetch(`<?= URL_PATH ?>/user/get`);
            userResponse = await userRes.json();
            user = userResponse.result;
        }

        if (userResponse.success === false) {
            title = "🔴 Error";
            text = `El usuario no se encurntra. Por favor, regresa. </br> El servicio a retornado: <strong>${userResponse.message}</strong>`;
            redirect = {
                href: `<?= URL_PATH ?>/user`,
                text: "Regresar",
            };

            alertModal(title, text, redirect);
        }

        const $configUserForm = document.getElementById("configUserForm");
        const selectedCountry = countriesResponse.result.find((item) => item.phone[0] === user.country_phone);
        const selectedCompany = companiesResponse.result.find((item) => item.id === user.companie_id);

        const optionsCountry = countriesResponse.result.map((item) => {
            if (item.phone[0] === user.country_phone) {
                return `<option value="${item.phone[0]}" selected>${item.name}</option>`;
            } else {
                return `<option value="${item.phone[0]}">${item.name}</option>`;
            }
        });

        const optionsCompany = companiesResponse.result.map((item) => {
            if (item.id === user.companie_id) {
                return `<option value="${item.id}" selected>${item.name}</option>`;
            } else {
                return `<option value="${item.id}">${item.name}</option>`;
            }
        });

        const $inputImage = $configUserForm.querySelector("#image_profile");
        const $inputName = $configUserForm.querySelector("#name");
        const $inputLastname = $configUserForm.querySelector("#last_name");
        const $inputDocument = $configUserForm.querySelector("#document");
        const $inputCountryPhone = $configUserForm.querySelector("#country_phone");
        const $inputCountryImage = $configUserForm.querySelector("#country_image");
        const $inputPhone = $configUserForm.querySelector("#phone");
        const $inputCompani_id = $configUserForm.querySelector("#companie_id");
        const $inputAddress = $configUserForm.querySelector("#address");
        const $inputCurrentPassword = $configUserForm.querySelector("#current_password");
        const $inputPassword = $configUserForm.querySelector("#password");
        const $inputConfirmPassword = $configUserForm.querySelector("#confirm_password");

        $inputImage.src = `<?= URL_PATH ?>${user.image}`;
        $inputName.value = user.name;
        $inputLastname.value = user.last_name;
        $inputDocument.value = user.document;
        $inputCountryImage.src = selectedCountry.image;
        $inputCountryPhone.innerHTML = optionsCountry.join("");
        $inputPhone.value = user.phone;
        $inputCompani_id.innerHTML = optionsCompany.join("");
        $inputAddress.value = user.address;

        $configUserForm.addEventListener("submit", async function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            try {
                let response = await fetch(`<?= URL_PATH ?>/user/edit`, {
                    method: "POST",
                    body: formData,
                });

                let responseText = await response.text();
                console.log(responseText);
            } catch (error) {
                console.error("Error:", error);
            }
        });
    });
</script>