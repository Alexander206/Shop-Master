document.addEventListener("DOMContentLoaded", async () => {
    const headerUserImage = document.querySelectorAll("#Header_userImage");
    const headerUserName = document.querySelector("#Header_userName");
    const headerUserDocument = document.querySelector("#Header_userDocument");
    const headerUserPhone = document.querySelector("#Header_userPhone");

    let resUser = await fetch(`${URL_PATH}/user/getUser`);
    let responseUser = await resUser.json();

    let resCountry = await fetch(`${URL_PATH}/document/countries`);
    let responseCounrty = await resCountry.json();

    const selectedCountry = responseCounrty.result.find((item) => item.phone[0] === responseUser.result.country_phone);

    // Image Profile
    for (const item of headerUserImage) {
        item.src = `${URL_PATH}/assets/images/profile/user-8.jpg`;
    }

    // User Name
    headerUserName.innerHTML = `${responseUser.result.name} ${responseUser.result.last_name}`;

    // User Document
    headerUserDocument.innerHTML = `<iconify-icon icon="tabler:id" class="iconify-sm"></iconify-icon> ${responseUser.result.document}`;

    // User Phone
    headerUserPhone.innerHTML = `<img src="${selectedCountry.image}" class="iconify-sm" style="width: 20px"></img> ${responseUser.result.phone}`;
});

async function handlerLogout() {
    let res = await fetch(`${URL_PATH}/user/logout`);
    let response = await res.json();

    if (!response.success) {
        title = "🔴 Error";
        text = `Error al cerrar Sesión. Por favor, inténtalo de nuevo. </br> El servicio a retornado: <strong>${response.message}</strong>`;

        alertModal(title, text);
    } else {
        title = "🟢 Éxito";
        text = `¡Se cerro la sesión! El servicio a retornado: <strong>${response.message}</strong>`;
        redirect = {
            href: `${URL_PATH}/`,
            text: "Continuar",
        };

        alertModal(title, text, redirect);
    }
}
