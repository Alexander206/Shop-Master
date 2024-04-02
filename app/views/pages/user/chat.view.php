<div class="card overflow-hidden chat-application">
    <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">
        <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
            <iconify-icon icon="tabler:menu-2" class="fs-5"></iconify-icon>
        </button>
        
        <form class="position-relative w-100">
            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact" />
            <iconify-icon icon="tabler:search" class="position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></iconify-icon>
        </form>
    </div>

    <div class="d-flex w-100">
        <div class="left-part position-relative border-end w-20 flex-shrink-0 d-none d-lg-block">
            <div class="px-9 pt-4 pb-3">
                <button class="btn btn-primary fw-semibold py-8 w-100">Compose</button>
            </div>
            <ul class="list-group" style="height: calc(100vh - 400px)" data-simplebar>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:inbox" class="fs-5"></iconify-icon>Inbox</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:brand-telegram" class="fs-5"></iconify-icon>Sent</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:file-text" class="fs-5"></iconify-icon>Draft</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:inbox" class="fs-5"></iconify-icon>Spam</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:trash" class="fs-5"></iconify-icon>Trash</a>
                </li>
                <li class="border-bottom my-3"></li>
                <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">
                    IMPORTANT
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:star" class="fs-5"></iconify-icon>Starred</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)" class="d-block"><iconify-icon icon="tabler:badge" class="fs-5"></iconify-icon>Important</a>
                </li>
                <li class="border-bottom my-3"></li>
                <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">LABELS</li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-primary"></iconify-icon>Promotional</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-warning"></iconify-icon>Social</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-success"></iconify-icon>Health</a>
                </li>
            </ul>
        </div>
        <div class="d-flex w-100">
            <div class="min-width-340">
                <div class="border-end user-chat-box h-100">
                    <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                        <form class="position-relative">
                            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search" />
                            <iconify-icon icon="tabler:search" class="position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></iconify-icon>
                        </form>
                    </div>
                    <div class="app-chat">
                        <ul class="chat-users" style="height: calc(100vh - 400px)" data-simplebar>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user text-bg-light" id="chat_user_1" data-user-id="1">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">James Smith</h6>
                                            <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Kindly check this latest updated
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:ti-star" claas="me-2 text-dark"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:ti-alert" claas="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_2" data-user-id="2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Katherine Flintoff</h6>
                                            <span class="badge text-bg-danger fs-2 rounded-4 py-1 px-2">Social</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Newsletter from AdminMart Team
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:ti-star" claas="fs-4 me-2 text-warning"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:ti-alert-circle" claas="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_3" data-user-id="3">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Bianca Macdowells</h6>
                                            <span class="badge text-bg-success fs-2 rounded-4 py-1 px-2">Health</span>
                                        </div>
                                        <h6 class="text-dark">
                                            Kindly check this latest updated
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:ti-slert" claas="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" claas="text-warning"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_4" data-user-id="4">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Michael Knight</h6>
                                            <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Social</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Developer Community needs help
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:star" class="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" class="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_5" data-user-id="5">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Jonathan Higgings</h6>
                                            <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Kindly check this latest updated
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:star" class="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" class="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_2" data-user-id="2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Mike Torello</h6>
                                            <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Health</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            From your hosting provider - action
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:star" class="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" class="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_3" data-user-id="3">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Bianca Macdowells</h6>
                                            <span class="badge text-bg-success fs-2 rounded-4 py-1 px-2">Health</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Kindly check this latest updated
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:star" class="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" class="text-warning"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_3" data-user-id="3">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" />
                                    </div>
                                    <div class="position-relative w-100 ms-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Michael Knight</h6>
                                            <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Social</span>
                                        </div>
                                        <h6 class="fw-semibold text-dark">
                                            Developer Community
                                        </h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><iconify-icon icon="tabler:star" class="fs-4 me-2 text-muted"></iconify-icon></span>
                                                <span class="d-block"><iconify-icon icon="tabler:alert-circle" class="text-muted"></iconify-icon></span>
                                            </div>
                                            <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <div class="chat-container h-100 w-100">
                    <div class="chat-box-inner-part h-100">
                        <div class="chatting-box app-email-chatting-box">
                            <div class="p-9 py-3 border-bottom chat-meta-user">
                                <ul class="list-unstyled mb-0 d-flex align-items-center">
                                    <li class="d-lg-none d-block">
                                        <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-3" href="javascript:void(0)">
                                            <iconify-icon icon="tabler:arrow-left"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star">
                                        <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-3" href="javascript:void(0)"><iconify-icon icon="tabler:start"></iconify-icon>
                                            <iconify-icon icon="tabler:start"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="important">
                                        <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-3" href="javascript:void(0)">
                                            <iconify-icon icon="tabler:alert-circle"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                        <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-3" href="javascript:void(0)">
                                            <iconify-icon icon="tabler:trash"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="position-relative overflow-hidden">
                                <div class="position-relative">
                                    <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: -20px">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="
                                                                                    height: 100%;
                                                                                    overflow: hidden scroll;
                                                                                ">
                                                        <div class="simplebar-content" style="padding: 20px">
                                                            <div class="chat-list chat active-chat" data-user-id="1">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-8.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="2">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-1.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="3">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-2.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="4">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-3.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="5">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-4.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="6">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-5.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="7">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-6.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-list chat" data-user-id="8">
                                                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <img src="../assets/images/profile/user-7.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                                                        <div>
                                                                            <h6 class="fw-semibold mb-0">
                                                                                Alexandra
                                                                                Flintoff
                                                                            </h6>
                                                                            <p class="mb-0">
                                                                                hello@loremipsum.com
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                                </div>
                                                                <div class="border-bottom pb-7 mb-7">
                                                                    <h4 class="fw-semibold text-dark mb-3">
                                                                        Kindly check this latest
                                                                        updated
                                                                    </h4>
                                                                    <p class="mb-3 text-dark">
                                                                        Hello Andrew,
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Lorem ipsum dolor sit
                                                                        amet, consectetur
                                                                        adipiscing elit. Quisque
                                                                        bibendum hendrerit
                                                                        lobortis. Nullam ut
                                                                        lacus eros. Sed at
                                                                        luctus urna, eu
                                                                        fermentum diam. In et
                                                                        tristique mauris.
                                                                    </p>
                                                                    <p class="mb-3 text-dark">
                                                                        Ut id ornare metus, sed
                                                                        auctor enim.
                                                                        Pellentesque nisi magna,
                                                                        laoreet a augue eget,
                                                                        tempor volutpat diam.
                                                                    </p>
                                                                    <p class="mb-0 text-dark">
                                                                        Regards,
                                                                    </p>
                                                                    <h6 class="fw-semibold mb-0 text-dark pb-1">
                                                                        Alexandra Flintoff
                                                                    </h6>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h6 class="fw-semibold mb-0 text-dark mb-3">
                                                                        Attachments
                                                                    </h6>
                                                                    <div class="d-block d-sm-flex align-items-center gap-4">
                                                                        <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-adobe.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        service-task.pdf
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                                                            <div class="d-flex align-items-center gap-3">
                                                                                <div class="rounded-1 text-bg-light p-6">
                                                                                    <img src="../assets/images/chat/icon-zip-folder.svg" alt="" width="24" height="24" />
                                                                                </div>
                                                                                <div>
                                                                                    <h6 class="fw-semibold">
                                                                                        work-project.zip
                                                                                    </h6>
                                                                                    <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                                        <span>2
                                                                                            MB</span><span>2
                                                                                            Dec
                                                                                            2023</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 537px"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: visible">
                                            <div class="simplebar-scrollbar" style="
                                                                            height: 25px;
                                                                            transform: translate3d(0px, 0px, 0px);
                                                                            display: block;
                                                                        "></div>
                                        </div>
                                    </div>
                                    <div class="px-9 py-3 border-top chat-send-message-footer">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <ul class="list-unstyledn mb-0 d-flex align-items-center gap-7">
                                                <li>
                                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1" href="javascript:void(0)">
                                                        <iconify-icon icon="tabler:arrow-back-up" class="fs-5"></iconify-icon>
                                                        Reply
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1" href="javascript:void(0)">
                                                        <iconify-icon icon="tabler:arrow-forward-up" class="fs-5"></iconify-icon>
                                                        Forward
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="px-9 pt-4 pb-3">
                <button class="btn btn-primary fw-semibold py-8 w-100">Compose</button>
            </div>
            <ul class="list-group" style="height: calc(100vh - 150px)" data-simplebar>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:inbox" class="fs-5"></iconify-icon> Inbox</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:brand-telegram" class="fs-5"></iconify-icon>Sent</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:file-text" class="fs-5"></iconify-icon>Draft</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:inbox" class="fs-5"></iconify-icon>Spam</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:trash" class="fs-5"></iconify-icon>Trash</a>
                </li>
                <li class="border-bottom my-3"></li>
                <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">
                    IMPORTANT
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:star" class="fs-5"></iconify-icon>Starred</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)" class="d-block"><iconify-icon icon="tabler:badge" class="fs-5"></iconify-icon>Important</a>
                </li>
                <li class="border-bottom my-3"></li>
                <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">LABELS</li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-primary"></iconify-icon>Promotional</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-warning"></iconify-icon>Social</a>
                </li>
                <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)"><iconify-icon icon="tabler:bookmark" class="fs-5 text-success"></iconify-icon>Health</a>
                </li>
            </ul>
        </div>
    </div>
</div>