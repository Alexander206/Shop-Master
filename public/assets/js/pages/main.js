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
    let phoneRegex = /^\d{5,14}$/;

    phoneNumber = phoneNumber.trim();

    if (!phoneRegex.test(phoneNumber)) {
        title = "🟡 Alerta";
        text = `Coloca un numero de telefono válido.`;

        alertModal(title, text);

        return false;
    }

    return phoneNumber;
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

function alertModal(title, text) {
    const $modaltitle = $modalError.querySelector("#errorModalTitle");
    const $modaltext = $modalError.querySelector("#errorModalText");

    $modaltitle.innerHTML = title;
    $modaltext.innerHTML = text;
    $("#errorModal").modal("show");
}
