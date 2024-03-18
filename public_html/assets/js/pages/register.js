const $registerForm = document.getElementById("registerForm");

document.addEventListener("DOMContentLoaded", async () => {
    const $phoneElement = document.getElementById("inputPhone");
    const $imgElement = $phoneElement.querySelector("#imageCountryPhone");
    const $inputElement = $phoneElement.querySelector("#inputCountryPhone");
    const $listElement = $phoneElement.querySelector("#optionsList");

    let res = await fetch(`${URL_PATH}/document/countries`);
    let response = await res.json();

    response.result.forEach((item) => {
        let option = document.createElement("option");
        option.value = item.phone[0];

        let span = document.createElement("span");
        span.textContent = item.name;

        option.appendChild(span);
        $listElement.appendChild(option);
    });

    $inputElement.addEventListener("input", (event) => {
        const selectedValue = event.target.value.trim();

        !selectedValue.startsWith("+") ? ($inputElement.value = "+" + selectedValue) : false;

        const selectedCountry = response.result.find((item) => item.phone[0] === selectedValue);

        if (selectedCountry) {
            $imgElement.src = selectedCountry.image;
        } else {
            $imgElement.src = `${URL_PATH}/assets/images/svgs/flag.svg`;
        }
    });
});

$registerForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const validateObject = (obj) => {
        for (let key in obj) {
            if (obj[key] === null) {
                return false;
            }
        }
        return true;
    };

    const password = validatePassword(event.target.inputPassword.value);
    const confirmPassword = validatePassword(event.target.inputConfirmPassword.value);

    const user = {
        name: validateInput(event.target.inputName.value),
        last_name: validateInput(event.target.inputLastname.value),
        document: validateDocument(event.target.inputDocument.value),
        country_phone: validateInput(event.target.inputCountryPhone.value),
        phone: validatePhoneNumber(event.target.inputPhoneNumber.value),
        password: password,
        role_id: 1,
        companie_id: 1,
    };

    if (checkPasswordMatch(password, confirmPassword) && validateObject(user)) {
        fetchApiRegister(user);
    }
});

const fetchApiRegister = async (user) => {
    const options = {
        method: "POST",
        body: JSON.stringify({ user }),
    };

    let res = await fetch(`${URL_PATH}/user/createUser`, options);
    let response = await res.json();

    if (!response.success) {
        title = "🔴 Error";
        text = `Error al registrar la cuenta. Por favor, inténtalo de nuevo. </br> El servicio a retornado: <strong>${response.message}</strong>`;

        alertModal(title, text);
    } else {
        title = "🟢 Éxito";
        text = `¡Registro exitoso! Tu cuenta ha sido creada satisfactoriamente. El servicio a retornado: <strong>${response.message}</strong>`;
        redirect = {
            href: `${URL_PATH}/`,
            text: "Inicia Sesión",
        };

        alertModal(title, text, redirect);
    }
};
