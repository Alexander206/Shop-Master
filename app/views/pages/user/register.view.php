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
                <form id="registerUserForm" class="row">
                    <div class="col-lg-6 d-flex align-items-stretch" enctype="multipart/form-data">
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
                                        <input id="image" type="file" name="image" accept="image/*" style="display: none;" required>
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
                                                <input type="name" class="form-control" name="name" id="name" placeholder="" autocomplete="given-name" required />
                                            </div>

                                            <div class="mb-4">
                                                <label for="last_name" class="form-label fw-semibold">Apellido</label>
                                                <input type="lastname" class="form-control" name="last_name" id="last_name" placeholder="" autocomplete="family-name" required />
                                            </div>

                                            <div class="mb-4">
                                                <label for="document" class="form-label fw-semibold">Documento</label>
                                                <input type="text" class="form-control" name="document" id="document" placeholder="" required />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Ubicación</label>

                                                <div class="row edit_input_phone">
                                                    <img class="" id="country_image" src="<?= URL_PATH ?>/assets/images/svgs/flag.svg" alt="">

                                                    <select class="form-select" name="country_phone" id="country_phone" aria-label="Default select example" required>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">
                                                    Teléfono
                                                </label>
                                                <input type="text" class="form-control phone-inputmask" name="phone" id="phone" inputmode="text" required />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Rol</label>
                                                <select class="form-select" name="role_id" id="role_id" aria-label="Default select example" required></select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold">Compañia</label>
                                                <select class="form-select" name="companie_id" id="companie_id" aria-label="Default select example" required></select>
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
                                        <label for="password" class="form-label fw-semibold">Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" required />
                                    </div>

                                    <div class="">
                                        <label for="confirm_password" class="form-label fw-semibold">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" required />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                        <input type="submit" class="btn btn-primary" value="Guardar"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

            /* ----- Form User ------ */

            const $registerUserForm = document.getElementById("registerUserForm");

            const $inputImage = $registerUserForm.querySelector("#image");
            const $image = $registerUserForm.querySelector("#image_profile");
            const $containerPhotos = $registerUserForm.querySelector("#containerPhotos");
            const $inputName = $registerUserForm.querySelector("#name");
            const $inputLastname = $registerUserForm.querySelector("#last_name");
            const $inputDocument = $registerUserForm.querySelector("#document");
            const $inputCountryPhone = $registerUserForm.querySelector("#country_phone");
            const $inputCountryImage = $registerUserForm.querySelector("#country_image");
            const $inputPhone = $registerUserForm.querySelector("#phone");
            const $inputCompani = $registerUserForm.querySelector("#companie_id");
            const $imputRoleId = $registerUserForm.querySelector("#role_id");
            const $inputPassword = $registerUserForm.querySelector("#password");
            const $inputConfirmPassword = $registerUserForm.querySelector("#confirm_password");

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

            $containerPhotos.innerHTML = buttonsProfile.join("");

            const randomIndex = Math.floor(Math.random() * imagesProfile.length)
            $image.src = `<?= URL_PATH ?>/assets/images/profile/${imagesProfile[randomIndex]}`;

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

            const optionsCountry = countriesResponse.result.map((item) => {
                return `<option value="${item.phone[0]}">${item.name}</option>`;
            });

            const optionsCompany = companiesResponse.result.map((item) => {
                return `<option value="${item.id}">${item.name}</option>`;
            });

            const optionsRole = rolesResponse.result.map((item) => {
                return `<option value="${item.id}">${item.type_role}</option>`;
            });

            $inputCountryPhone.innerHTML = optionsCountry.join("");
            $inputCompani.innerHTML = optionsCompany.join("");
            $imputRoleId.innerHTML = optionsRole.join("");

            /* ----- Form Image User ------ */

            $registerUserForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const arrayIdsCompanies = companiesResponse.result.map(item => item.id);
                const arrayIdsRoles = rolesResponse.result.map(item => item.id);

                const user = {
                    image: $image.src.replace("<?= URL_PATH ?>", ""),
                    name: validateInput($inputName.value),
                    last_name: validateInput($inputLastname.value),
                    document: validateDocument($inputDocument.value),
                    country_phone: validateInput($inputCountryPhone.value),
                    phone: validatePhoneNumber($inputPhone.value),
                    password: validatePassword($inputPassword.value),
                    role_id: validateInputId($imputRoleId.value, arrayIdsRoles),
                    companie_id: validateInputId($inputCompani.value, arrayIdsCompanies),
                };

                const userJSON = JSON.stringify(user)

                const formData = new FormData(this);
                formData.append("user", userJSON);

                const messages = {
                    success: {
                        title: "🟢 Éxito",
                        text: `Creación de perfil exitosa.`,
                        redirect: {
                            href: `<?= URL_PATH ?>/user`,
                            text: "Recargar",
                        }
                    },
                    failure: {
                        "title": "🔴 Error",
                        "text": `Problemas en crear el perfil.`
                    },
                };

                fetchData(`<?= URL_PATH ?>/user/create`, "POST", messages, formData)
            });
        });

        async function selectImage(src) {

            const $registerUserForm = document.getElementById("registerUserForm");
            const $inputImage = $registerUserForm.querySelector("#image");
            const $image = $registerUserForm.querySelector("#image_profile");

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