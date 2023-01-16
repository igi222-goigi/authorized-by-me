<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('uploads') . '/' . app_settings()->favicon }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('uploads') . '/' . app_settings()->logo }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="mb-3 m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('admin') }}/images/users/avatar-2.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> {{ Auth::user()->name }} </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> Available</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <!-- item-->
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs me-3 mt-1">
                                    <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                        <i class="ri-user-line text-primary font-size-16"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 text-truncate">
                                    <h6 class="mb-1">Profile</h6>
                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs me-3 mt-1">
                                    <span class="avatar-title bg-soft-secondary rounded-circle font-size-16">
                                        <i class="ri-settings-2-line text-secondary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 text-truncate">
                                    <h6 class="mb-1">Settings <span class="badge bg-success float-end mt-1">11</span>
                                    </h6>
                                    <p class="mb-0 font-size-12">Manage your site parameters.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="pt-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center"
                                href="{{ route('backend.logout') }}">
                                <i class="ri-shut-down-line align-middle me-1"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
