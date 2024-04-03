<!--  Header Start -->
<header class="topbar rounded-0 border-0">
    <div class="with-vertical">
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Header -->
        <!-- ---------------------------------- -->
        <nav class="navbar navbar-expand-lg px-lg-0 px-0 py-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-icon-hover sidebartoggler nav-icon-hover" href="/">
                        <img src="<?= URL_PATH ?>/assets/images/logos/favicon.png" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown hover-dd d-none d-lg-block">
                    <a class="nav-link" href="/"> Inicio </a>
                </li>

                <li class="nav-item dropdown hover-dd d-none d-lg-block">
                    <a class="nav-link" href="/user"> Clientes </a>
                </li>

                <li class="nav-item dropdown hover-dd d-none d-lg-block">
                    <a class="nav-link" href="/product"> Productos </a>
                </li>

                <li class="nav-item dropdown hover-dd d-none d-lg-block">
                    <a class="nav-link" href="/shopingCar"> Pedidos </a>
                </li>

                <li class="nav-item dropdown hover-dd d-none d-lg-block">
                    <a class="nav-link" href="/offices"> Despachos </a>
                </li>
            </ul>

            <a class="navbar-toggler nav-icon-hover p-0 border-0 text-white" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                </span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between py-2">
                    <ul class="navbar-nav flex-row d-flex d-lg-none">
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="Header_userImage" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5">Perfil de Usuario</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img id="Header_userImage" class="rounded-circle" width="80" height="80" alt="" />
                                        <div class="ms-3">
                                            <h5 id="Header_userName" class="mb-1 fs-4 text-secondary"> </h5>

                                            <p id="Header_userDocument" class="mb-0 d-flex align-items-center gap-2"></p>

                                            <p id="Header_userPhone" class="mb-0 d-flex align-items-center gap-2"></p>
                                        </div>
                                    </div>

                                    <div class="message-body">
                                        <a href="<?= URL_PATH ?>/user/config" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-circle round p-6 fs-6 text-primary">
                                                <iconify-icon icon="solar:user-circle-line-duotone" class="text-primary"></iconify-icon>
                                            </span>

                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                <h6 class="mb-1 fs-3 lh-base">Mi Perfil</h6>
                                                <span class="fs-3 d-block text-secondary">
                                                    Configuración de cuenta
                                                </span>
                                            </div>
                                        </a>

                                        <a href="<?= URL_PATH ?>/user/chat" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-warning-subtle rounded-circle round p-6 fs-6 text-primary">
                                                <iconify-icon icon="solar:inbox-line-line-duotone" class="text-warning"></iconify-icon>
                                            </span>

                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                <h6 class="mb-1 fs-3 lh-base">Mi Bandeja de entrada</h6>
                                                <span class="fs-3 d-block text-secondary">
                                                    Mensajes y correo
                                                </span>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <button id="logout" onclick="handlerLogout()" class="btn btn-primary">
                                            Cerrar sesión
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end profile Dropdown -->
                        <!-- ------------------------------- -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ---------------------------------- -->
        <!-- End Vertical Layout Header -->
        <!-- ---------------------------------- -->

        <!-- ------------------------------- -->
        <!-- apps Dropdown in Small screen -->
        <!-- ------------------------------- -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
                <div class="offcanvas-header justify-content-between">
                    <div class="brand-logo d-flex align-items-center justify-content-between">
                        <a href="../main/index.html" class="text-nowrap logo-img">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?= URL_PATH ?>/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?= URL_PATH ?>/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
                                <!-- Light Logo text -->
                                <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body" data-simplebar="" data-simplebar style="height: calc(100vh - 80px)">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link ms-0" href="/" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:chat-unread-outline" class="iconify-sm"></iconify-icon>
                                </span>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link ms-0" href="/user" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:user-linear" class="iconify-sm"></iconify-icon>
                                </span>
                                <span class="hide-menu">Clientes</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link ms-0" href="/product" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="fluent-mdl2:product" class="iconify-sm"></iconify-icon>
                                </span>
                                <span class="hide-menu">Productos</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link ms-0" href="/shopingCar" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="carbon:ibm-data-product-exchange" class="iconify-sm"></iconify-icon>
                                </span>
                                <span class="hide-menu">Pedidos</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link ms-0" href="/offices" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="eva:car-outline" class="iconify-sm"></iconify-icon>
                                </span>
                                <span class="hide-menu">Despachos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="app-header with-horizontal">
        <nav class="navbar navbar-expand-xl container-fluid p-0">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">


                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="Header_userImage" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>

                            <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5">Perfil de Usuario</h5>
                                    </div>

                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img id="Header_userImage" class="rounded-circle" width="80" height="80" alt="" />
                                        <div class="ms-3">
                                            <h5 id="Header_userName" class="mb-1 fs-4 text-secondary"> </h5>

                                            <p id="Header_userDocument" class="mb-0 d-flex align-items-center gap-2"></p>

                                            <p id="Header_userPhone" class="mb-0 d-flex align-items-center gap-2"></p>
                                        </div>
                                    </div>

                                    <div class="message-body">
                                        <a href="<?= URL_PATH ?>/user/config" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-circle round p-6 fs-6 text-primary">
                                                <iconify-icon icon="solar:user-circle-line-duotone" class="text-primary"></iconify-icon>
                                            </span>

                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                <h6 class="mb-1 fs-3 lh-base">Mi Perfil</h6>

                                                <span class="fs-3 d-block text-secondary">
                                                    Configuración de cuenta
                                                </span>
                                            </div>
                                        </a>

                                        <a href="../main/app-email.html" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center bg-warning-subtle rounded-circle round p-6 fs-6 text-primary">
                                                <iconify-icon icon="solar:inbox-line-line-duotone" class="text-warning"></iconify-icon>
                                            </span>

                                            <div class="w-75 d-inline-block v-middle ps-3">
                                                <h6 class="mb-1 fs-3 lh-base">Mi Bandeja de entrada</h6>

                                                <span class="fs-3 d-block text-secondary">
                                                    Mensajes y correo
                                                </span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="d-grid py-4 px-7 pt-8">
                                        <button id="logout" onclick="handlerLogout()" class="btn btn-primary">
                                            Cerrar sesión
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--  Header End -->

<script>
    document.addEventListener("DOMContentLoaded", async () => {
        const headerUserImage = document.querySelectorAll("#Header_userImage");
        const headerUserName = document.querySelector("#Header_userName");
        const headerUserDocument = document.querySelector("#Header_userDocument");
        const headerUserPhone = document.querySelector("#Header_userPhone");

        let resUser = await fetch(`<?= URL_PATH ?>/user/get`);
        let responseUser = await resUser.json();

        let resCountry = await fetch(`<?= URL_PATH ?>/document/countries`);
        let responseCounrty = await resCountry.json();

        const selectedCountry = responseCounrty.result.find((item) => item.phone[0] === responseUser.result.country_phone);

        // Image Profile
        for (const item of headerUserImage) {
            item.src = `<?= URL_PATH ?>${responseUser.result.image}`;
        }

        // User Name
        headerUserName.innerHTML = `${responseUser.result.name} ${responseUser.result.last_name}`;

        // User Document
        headerUserDocument.innerHTML = `<iconify-icon icon="tabler:id" class="iconify-sm"></iconify-icon> ${responseUser.result.document}`;

        // User Phone
        headerUserPhone.innerHTML = `<img src="${selectedCountry.image}" class="iconify-sm" style="width: 20px"></img> ${responseUser.result.phone}`;
    });

    async function handlerLogout() {
        let res = await fetch(`<?= URL_PATH ?>/user/logout`);
        let response = await res.json();

        if (!response.success) {
            title = "🔴 Error";
            text = `Error al cerrar Sesión. Por favor, inténtalo de nuevo. </br></br> El servicio a retornado: <strong>${response.message}</strong>`;

            alertModal(title, text);
        } else {
            title = "🟢 Éxito";
            text = `¡Se cerro la sesión! </br></br> El servicio a retornado: <strong>${response.message}</strong>`;
            redirect = {
                href: `<?= URL_PATH ?>/`,
                text: "Continuar",
            };

            alertModal(title, text, redirect);
        }
    }
</script>