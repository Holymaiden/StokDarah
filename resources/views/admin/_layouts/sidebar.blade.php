<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
        <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-sidebar-brand">
                        <a href="{{ url('') }}" class="logo-link nk-sidebar-logo">
                                <img class="logo-light logo-img" src="{{url('user')}}/img/PMI.png" srcset="{{url('user')}}/img/PMI.png" alt="logo">
                                <img class="logo-dark logo-img" src="{{url('user')}}/img/PMI.png" srcset="{{url('user')}}/img/PMI.png" alt="logo-dark">
                        </a>
                </div>
        </div><!-- .nk-sidebar-element -->
        <div class="nk-sidebar-element nk-sidebar-body">
                <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                                <ul class="nk-menu">
                                        <li class="nk-menu-item">
                                                <a href="{{ route('dashboard') }}" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                                        <span class="nk-menu-text">Dashboard</span>
                                                </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                                <h6 class="overline-title text-primary-alt">Admin</h6>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                                <a href="{{ route('users') }}" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                                                        <span class="nk-menu-text">Users</span>
                                                </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                                <h6 class="overline-title text-primary-alt">Darah</h6>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                                <a href="{{ route('stocks') }}" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-covid"></em></span>
                                                        <span class="nk-menu-text">Masuk</span>
                                                </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                                <a href="{{ route('permintaans') }}" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-property-alt"></em></span>
                                                        <span class="nk-menu-text">Permintaan</span>
                                                </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                                <a href="{{ route('sisas') }}" class="nk-menu-link">
                                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                                        <span class="nk-menu-text">Sisa</span>
                                                </a>
                                        </li><!-- .nk-menu-item -->
                                </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->