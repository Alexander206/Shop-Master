const $modalError = document.getElementById("errorModal");

function validateInput(input) {
    var sqlRegex = /(\b(SELECT|UPDATE|INSERT INTO|DELETE FROM|DROP TABLE)\b)|(--)|(;)/i;

    if (sqlRegex.test(input)) {
        title = "🟡 Alerta";
        text = `Se detectó una posible consulta SQL maliciosa. Por favor, evita incluir palabras clave SQL.`;

        alertModal(title, text);

        return null;
    }

    return input;
}

function validateDocument(document) {
    document = validateInput(document);
    document = document.trim().replace(/\s/g, "").toLowerCase();

    const regex = /^\d{7,}$/;

    if (!regex.test(document)) {
        title = "🟡 Alerta";
        text = `El documento debe de tener más de 7 dígitos.`;

        alertModal(title, text);

        return null;
    }

    return document;
}

function validatePassword(password) {
    password = validateInput(password);
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if (!regex.test(password)) {
        title = "🟡 Alerta";
        text = `La contraseña debe tener al menos 8 caracteres y contener al menos una letra minúscula, una letra mayúscula y un número.`;

        alertModal(title, text);

        return null;
    }

    return password;
}

function validatePhoneNumber(phoneNumber) {
    phoneNumber = validateInput(phoneNumber);

    // Remover cualquier caracter que no sea número
    phoneNumber = phoneNumber.replace(/\D/g, "");

    // Verificar si la longitud del número es válida
    if (phoneNumber.length < 10 || phoneNumber.length > 15) {
        title = "🟡 Alerta";
        text = `Por favor, coloca un número de teléfono válido.`;
        alertModal(title, text);
        return null;
    }

    // Formatear el número al estilo (322) 419-8413
    phoneNumber = phoneNumber.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");

    return phoneNumber;
}

function validateInputId(input, validIds) {
    input = validateInput(input);

    if (!validIds.some((id) => String(id) === input)) {
        title = "🟡 Alerta";
        text = `El La opción proporcionada no es válida.`;
        alertModal(title, text);
        return null;
    }

    return input;
}

function checkPasswordMatch(password, confirmPassword) {
    if (password !== confirmPassword) {
        title = "🟡 Alerta";
        text = `Las contraseñas deben de ser iguales.`;

        alertModal(title, text);

        return false;
    } else {
        return true;
    }
}

function alertModal(title, text, redirect) {
    const $modaltitle = $modalError.querySelector("#errorModalTitle");
    const $modaltext = $modalError.querySelector("#errorModalText");
    const $modalRedirect = $modalError.querySelector("#errorModalRedirect");
    const $modalConfirm = $modalError.querySelector("#errorModalConfirm");
    $modalConfirm.style.display = "none";

    if (redirect) {
        $modalRedirect.style.display = "block";
        $modalRedirect.href = redirect.href;
        $modalRedirect.textContent = redirect.text;
    } else {
        $modalRedirect.style.display = "none";
    }

    $modaltitle.innerHTML = title;
    $modaltext.innerHTML = text;
    $("#errorModal").modal("show");
}

function warningModal(title, text, btnValue) {
    const $modaltitle = $modalError.querySelector("#errorModalTitle");
    const $modaltext = $modalError.querySelector("#errorModalText");
    const $modalRedirect = $modalError.querySelector("#errorModalRedirect");
    const $modalConfirm = $modalError.querySelector("#errorModalConfirm");
    $modalRedirect.style.display = "none";

    if (btnValue) {
        $modalConfirm.value = btnValue;
    }

    $modaltitle.innerHTML = title;
    $modaltext.innerHTML = text;
    $("#errorModal").modal("show");
}

async function fetchData(url, method, messages, data = null) {
    try {
        const { success, failure } = messages;

        const options = {
            method: method,
            Headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data),
        };

        const res = await fetch(url, options);
        const response = await res.json();

        if (!response.success) {
            title = failure.title;
            text = `${failure.text}</br></br> El servicio a retornado: <strong>${response.message}</strong>`;
            redirect = failure.redirect ? failure.redirect : null;

            alertModal(title, text, redirect);
        } else {
            title = success.title;
            text = `${success.text}</br></br> El servicio a retornado: <strong>${response.message}</strong>`;
            redirect = success.redirect ? success.redirect : null;

            alertModal(title, text, redirect);
        }
    } catch (error) {
        console.log("Error:", error);
    }
}
