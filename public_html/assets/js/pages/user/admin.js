document.addEventListener("DOMContentLoaded", async (event) => {
    const $table = document.getElementById("tableUsersAdmin").querySelector("tbody");

    const response = await fetch(`${URL_PATH}/user/listUser`);
    const res = await response.json();

    console.log(res.result);

    const element = res.result.map((item) => {
        return `
        <tr>
        <td>
            <h6 class="fs-4 fw-semibold mb-0">${item.id}</h6>
        </td>

        <td>
            <div class="d-flex align-items-center">
                <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" />
                <div class="ms-3">
                    <h6 class="fs-4 fw-semibold mb-0">${item.name} ${item.last_name}</h6>
                    <span class="fw-normal">${item.companie_id}</span>
                </div>
            </div>
        </td>

        <td>
            <p class="mb-0 fw-normal fs-4">${item.document}</p>
        </td>

        <td>
            <div class="d-flex align-items-center gap-2">
                <span class="badge text-bg-primary rounded-3 fw-semibold fs-2">${item.role_id}</span>
                <span class="badge text-bg-secondary rounded-3 fw-semibold fs-2">${item.role_id}</span>
            </div>
        </td>

        <td>
            <p class="mb-0 fw-normal fs-4">Elite Admin</p>
        </td>

        <td>
            <p class="mb-0 fw-normal fs-4">${item.country_phone} ${item.phone}</p>
        </td>

        <td>
            <div class="dropdown dropstart">
                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical fs-6"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-3" href="/user/config?id=${item.document}"><i class="fs-4 ti ti-edit"></i>Edit</a>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center gap-3" onclick="deleteUser(${item.id})"><i class="fs-4 ti ti-trash"></i>Delete</button>
                    </li>
                </ul>
            </div>
        </td>
    </tr>`;
    });

    $table.innerHTML = element;
});

async function deleteUser(id) {
    title = "🟡 Alerta";
    text = `Seguro que deseas eliminar el usuario con el ID: <strong>${id}</strong>`;

    warningModal(title, text);

    document.getElementById("errorModalConfirm").addEventListener("click", async () => {
        const res = await fetch(`${URL_PATH}/user/deleteUser`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                id: id,
            }),
        });

        const response = await res.json();

        if (!response.success) {
            title = "🔴 Error";
            text = `Error al elimminar el usuario. Por favor, inténtalo de nuevo. </br> El servicio a retornado: <strong>${response.message}</strong>`;

            alertModal(title, text);
        } else {
            title = "🟢 Éxito";
            text = `¡Eliminación exitosa! El usuario se elimino correctamente. El servicio a retornado: <strong>${response.message}</strong>`;
            redirect = {
                href: `${URL_PATH}/user`,
                text: "Continuar",
            };

            alertModal(title, text, redirect);
        }
    });
}
