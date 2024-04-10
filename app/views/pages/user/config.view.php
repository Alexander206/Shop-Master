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
                    <form id="imageUserForm" class="col-lg-6 d-flex align-items-stretch" enctype="multipart/form-data">
                        <div class="card w-100 position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold">Configurar usuario</h5>

                                <p class="card-subtitle mb-4">
                                    Cambia tu foto de perfil desde aquí
                                </p>

                                <div class="text-center">
                                    <img id="image_profile" src="<?= URL_PATH ?>/assets/images/profile/user-0.png" alt="" class="img-fluid rounded-circle" width="120" height="120" />

                                    <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                        <label for="image" class="btn btn-secondary">Agregar</label>
                                        <input id="image" type="file" name="image" accept="image/*" style="display: none;">

                                        <input type="submit" class="btn btn-primary" value="Guardar"></input>
                                    </div>

                                    <p class="mb-0">
                                        JPG, GIF o PNG permitidos. Tamaño máximo de 800K
                                    </p>
                                </div>

                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <h4 class="fw-semibold mb-3">Fotos de perfil prediseñadas</h4>
                                        <div id="containerPhotos" class="row"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 position-relative overflow-hidden">
                            <form id="dataUserForm" class="card-body p-4">
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
                                                <input type="text" class="form-control" name="document" id="document" placeholder="" disabled />
                                            </div>

                                            <div>
                                                <label for="address" class="form-label fw-semibold">Dirección</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="" disabled />
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
                                                <label class="form-label fw-semibold">
                                                    Teléfono
                                                </label>
                                                <input type="text" class="form-control phone-inputmask" name="phone" id="phone" inputmode="text" />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Compañia</label>
                                                <select class="form-select" name="companie_id" id="companie_id" aria-label="Default select example"></select>
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Rol</label>
                                                <select class="form-select" name="role_id" id="role_id" aria-label="Default select example"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                        <input type="submit" class="btn btn-primary" value="Guardar"></input>
                                    </div>
                                </div>
                            </form>

                            <form id="passwordUserForm" class="card-body p-4">
                                <h5 class="card-title fw-semibold">Cambiar la contraseña</h5>

                                <p class="card-subtitle mb-4">
                                    Para cambiar su contraseña por favor confirme aquí
                                </p>

                                <div>
                                    <div class="mb-4">
                                        <label for="current_password" class="form-label fw-semibold">Contraseña actual</label>
                                        <input type="password" class="form-control" name="current_password" id="current_password" />
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label fw-semibold">Nueva contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" />
                                    </div>

                                    <div class="">
                                        <label for="confirm_password" class="form-label fw-semibold">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                        <input type="submit" class="btn btn-primary" value="Actualizar"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", async () => {
            const urlParams = new URLSearchParams(window.location.search);
            const idUser = urlParams.get("id");

            const countriesRes = await fetch(`<?= URL_PATH ?>/document/countries`);
            const countriesResponse = await countriesRes.json();

            const companiesRes = await fetch(`<?= URL_PATH ?>/company/list`);
            const companiesResponse = await companiesRes.json();

            const rolesRes = await fetch(`<?= URL_PATH ?>/rol/list`);
            const rolesResponse = await rolesRes.json();

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

            /* ----- Form Image User ------ */

            const $imageUserForm = document.getElementById("imageUserForm");
            const $inputImage = $imageUserForm.querySelector("#image");
            const $image = $imageUserForm.querySelector("#image_profile");
            const $containerPhotos = $imageUserForm.querySelector("#containerPhotos");

            const imagesProfile = [
                "user-1.jpg",
                "user-2.jpg",
                "user-3.jpg",
                "user-4.jpg",
                "user-5.jpg",
                "user-6.jpg",
                "user-7.jpg",
                "user-8.jpg",
                "user-9.jpg",
                "user-10.jpg",
                "user-11.jpg",
                "user-12.jpg",
            ];

            const buttonsProfile = imagesProfile.map((item) => {
                let urlImage = `<?= URL_PATH ?>/assets/images/profile/${item}`;

                return `
                    <div class="col-3 p-2">
                        <button type="button" class="bg-transparent border-0 m-0 p-0" onclick="selectImage('${urlImage}')" >
                            <img src=${urlImage} alt="" class="rounded-2 img-fluid m-0">
                        </button>
                    </div>`;
            });

            $image.src = `<?= URL_PATH ?>${user.image}`;

            const img = await loadImage($image.src);
            const urlImage = $image.src;
            const fileNameImage = urlImage.substring(urlImage.lastIndexOf('/') + 1);
            const extension = `image/${fileNameImage.split('.').pop().toLowerCase()}`;

            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);

            const fileListPromise = new Promise(resolve => {
                canvas.toBlob(blob => {
                    const file = new File([blob], fileNameImage, {
                        type: extension
                    });

                    const fileList = new DataTransfer();
                    fileList.items.add(file);

                    resolve(fileList);
                }, extension);
            });

            const fileList = await fileListPromise;
            $inputImage.files = fileList.files;

            $containerPhotos.innerHTML = buttonsProfile.join("");

            // Submit

            $imageUserForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const formData = new FormData(this);

                const messages = {
                    success: {
                        title: "🟢 Éxito",
                        text: `Actualización de imagen de perfil exitosa.`,
                        redirect: {
                            href: `<?= URL_PATH ?>/user/config?id=${user.document}`,
                            text: "Recargar",
                        }
                    },
                    failure: {
                        "title": "🔴 Error",
                        "text": `Problemas en la actualización de imagen de perfil.`
                    },
                };

                fetchData(`<?= URL_PATH ?>/user/updateImage?id=${user.document}`, "POST", messages, formData)
            });

            /* ----- Form Data User ------ */

            const $dataUserForm = document.getElementById("dataUserForm");

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

            const optionsRole = rolesResponse.result.map((item) => {
                if (item.id === user.role_id) {
                    return `<option value="${item.id}" selected>${item.type_role}</option>`;
                } else {
                    return `<option value="${item.id}">${item.type_role}</option>`;
                }
            });

            const $inputName = $dataUserForm.querySelector("#name");
            const $inputLastname = $dataUserForm.querySelector("#last_name");
            const $inputDocument = $dataUserForm.querySelector("#document");
            const $inputCountryPhone = $dataUserForm.querySelector("#country_phone");
            const $inputCountryImage = $dataUserForm.querySelector("#country_image");
            const $inputPhone = $dataUserForm.querySelector("#phone");
            const $inputCompani = $dataUserForm.querySelector("#companie_id");
            const $imputRoleId = $dataUserForm.querySelector("#role_id");
            const $inputAddress = $dataUserForm.querySelector("#address");

            $inputName.value = user.name;
            $inputLastname.value = user.last_name;
            $inputDocument.value = user.document;
            $inputCountryPhone.innerHTML = optionsCountry.join("");
            $inputCountryImage.src = selectedCountry.image;
            $inputPhone.value = user.phone;
            $inputCompani.innerHTML = optionsCompany.join("");
            $imputRoleId.innerHTML = optionsRole.join("");
            $inputAddress.value = selectedCompany.address;

            // Submit

            $dataUserForm.addEventListener("submit", async (event) => {
                event.preventDefault();

                const arrayIdsCompanies = companiesResponse.result.map(item => item.id);
                const arrayIdsRoles = rolesResponse.result.map(item => item.id);

                const user = {
                    name: validateInput(event.target.name.value),
                    last_name: validateInput(event.target.last_name.value),
                    document: validateDocument(event.target.document.value),
                    country_phone: validateInput(event.target.country_phone.value),
                    phone: validatePhoneNumber(event.target.phone.value),
                    companie_id: validateInputId(event.target.companie_id.value, arrayIdsCompanies),
                    role_id: validateInputId(event.target.role_id.value, arrayIdsRoles),
                }

                const messages = {
                    success: {
                        title: "🟢 Éxito",
                        text: `Actualización en la informació de perfil exitosa.`,
                        redirect: {
                            href: `<?= URL_PATH ?>/user/config?id=${user.document}`,
                            text: "Recargar",
                        }
                    },
                    failure: {
                        "title": "🔴 Error",
                        "text": `Problemas en la actualización del perfil.`
                    },
                };

                fetchData(`<?= URL_PATH ?>/user/update`, "PATCH", messages, user)
            });

            /* ----- Form Password User ------ */

            const $passwordUserForm = document.getElementById("passwordUserForm");

            const $inputCurrentPassword = $passwordUserForm.querySelector("#current_password");
            const $inputPassword = $passwordUserForm.querySelector("#password");
            const $inputConfirmPassword = $passwordUserForm.querySelector("#confirm_password");

            $passwordUserForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const data = {
                    document: user.document,
                    old_password: validatePassword($inputCurrentPassword.value),
                    new_password: validatePassword($inputPassword.value),
                };

                const messages = {
                    success: {
                        title: "🟢 Éxito",
                        text: `Actualización de la contraseña fue exitosa.`,
                        redirect: {
                            href: `<?= URL_PATH ?>/user/config?id=${user.document}`,
                            text: "Recargar",
                        }
                    },
                    failure: {
                        "title": "🔴 Error",
                        "text": `Problemas en la actualización de la contraseña.`
                    },
                };

                if (checkPasswordMatch($inputPassword.value, $inputConfirmPassword.value)) {
                    fetchData(`<?= URL_PATH ?>/user/changePassword`, "PATCH", messages, data)
                }
            });
        });

        async function selectImage(src) {
            const $imageUserForm = document.getElementById("imageUserForm");
            const $inputImage = $imageUserForm.querySelector("#image");
            const $image = $imageUserForm.querySelector("#image_profile");

            $image.src = src;

            const img = await loadImage($image.src);
            const urlImage = $image.src;
            const fileNameImage = urlImage.substring(urlImage.lastIndexOf('/') + 1);
            const extension = `image/${fileNameImage.split('.').pop().toLowerCase()}`;

            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);

            const fileListPromise = new Promise(resolve => {
                canvas.toBlob(blob => {
                    const file = new File([blob], fileNameImage, {
                        type: extension
                    });

                    const fileList = new DataTransfer();
                    fileList.items.add(file);

                    resolve(fileList);
                }, extension);
            });

            const fileList = await fileListPromise;
            $inputImage.files = fileList.files;
        };

        // Función para cargar la imagen
        function loadImage(url) {
            return new Promise((resolve, reject) => {
                const img = new Image();
                img.onload = () => resolve(img);
                img.onerror = reject;
                img.src = url;
            });
        }
    </script>