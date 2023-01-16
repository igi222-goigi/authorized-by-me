            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('admin') }}/images/logo-sm-light.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin') }}/images/logo-dark.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('uploads') . '/' . app_settings()->favicon }}" alt="" class="img-fluid">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('uploads') . '/' . app_settings()->logo }}" alt="" class="img-fluid">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ri-home-gear-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Representatives</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{route('admin.users.agents')}}">Agents</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" >Attorneys</a>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);">Representatives</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Clients</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
