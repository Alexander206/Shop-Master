document.addEventListener("DOMContentLoaded", async () => {
    const urlParams = new URLSearchParams(window.location.search);
    const idUser = urlParams.get("id");

    let countriesRes = await fetch(`${URL_PATH}/document/countries`);
    let countriesResponse = await countriesRes.json();

    let companiesRes = await fetch(`${URL_PATH}/company/get`);
    let companiesResponse = await companiesRes.json();

    let user;
    let userResponse;

    if (idUser !== null) {
        let userRes = await fetch(`${URL_PATH}/user/getUserByDoc`, {
            method: "POST",
            body: JSON.stringify({ doc: idUser }),
        });

        userResponse = await userRes.json();
        user = userResponse.result;
    } else {
        let userRes = await fetch(`${URL_PATH}/user/getUser`);
        userResponse = await userRes.json();
        user = userResponse.result;
    }

    if (userResponse.success === false) {
        title = "🔴 Error";
        text = `El usuario no se encurntra. Por favor, regresa. </br> El servicio a retornado: <strong>${userResponse.message}</strong>`;
        redirect = {
            href: `${URL_PATH}/user`,
            text: "Regresar",
        };

        alertModal(title, text, redirect);
    }

    console.log(userResponse);

    console.log(countriesResponse);

    const $configUserForm = document.getElementById("configUserForm");
    const selectedCountry = countriesResponse.result.find((item) => item.phone[0] === user.country_phone);
    const options = countriesResponse.result.map((item) => {
        if (item.phone[0] === user.country_phone) {
            return `<option value="${item.phone[0]}" selected>${item.name}</option>`;
        } else {
            return `<option value="${item.phone[0]}">${item.name}</option>`;
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

    $inputImage.src = `${URL_PATH}${user.image}`;
    $inputName.value = user.name;
    $inputLastname.value = user.last_name;
    $inputDocument.value = user.document;
    $inputCountryImage.src = selectedCountry.image;
    $inputCountryPhone.innerHTML = options.join("");

    $inputCountryPhone.value = user.country_phone;
    $inputPhone.value = user.phone;
    $inputCompani_id.value = user.companie_id;
    /* $inputAddress.value = user.address; */

    $configUserForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        try {
            let response = await fetch(`${URL_PATH}/user/editUser`, {
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
