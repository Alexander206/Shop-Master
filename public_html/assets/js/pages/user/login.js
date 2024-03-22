const $loginForm = document.getElementById("loginForm");

$loginForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const document = validateDocument(event.target.inputDocument.value);
    const password = validatePassword(event.target.inputPassword.value);

    if (document !== null && password !== null) {
        fetchApiLogin(document, password);
    }
});

const fetchApiLogin = async (document, password) => {
    const options = {
        method: "POST",
        body: JSON.stringify({ document, password }),
    };

    let res = await fetch(`${URL_PATH}/user/loginUser`, options);
    let response = await res.json();

    if (!response.success) {
        title = "🔴 Error";
        text = `Error al iniciar sesión. Por favor, asegúrate de que tu docuemnto y contraseña sean correctos. </br> El servicio a retornado: <strong>${response.message}</strong>`;

        alertModal(title, text);
    } else {
        title = "🟢 Éxito";
        text = `¡Inicio de sesión exitoso! ¡Bienvenido de vuelta!. El servicio a retornado: <strong>${response.message}</strong>`;
        redirect = {
            href: `${URL_PATH}/`,
            text: "Continuar",
        };

        alertModal(title, text, redirect);
    }

    console.log(response);
};
