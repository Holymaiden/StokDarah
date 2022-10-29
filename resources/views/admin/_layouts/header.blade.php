<!-- main header @s -->
<div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
                <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img" src="{{url('user')}}/img/PMI.png" srcset="{{url('user')}}/img/PMI.png" alt="logo">
                                        <img class="logo-dark logo-img" src="{{url('user')}}/img/PMI.png" srcset="{{url('user')}}/img/PMI.png" alt="logo-dark">
                                </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                        <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                        <em class="icon ni ni-card-view"></em>
                                                </div>
                                                <div class="nk-news-text">
                                                        <!-- -->
                                                </div>
                                        </a>
                                </div>
                        </div><!-- .nk-header-news -->
                        <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                        <li class="dropdown user-dropdown">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                        <div class="user-toggle">
                                                                <div class="user-avatar sm">
                                                                        <em class="icon ni ni-user-alt"></em>
                                                                </div>
                                                                <div class="user-info d-none d-md-block">
                                                                        <div class="user-status">{{ ucwords(Auth::user()->role) }}</div>
                                                                        <div class="user-name dropdown-indicator">{{ ucwords(Auth::user()->name) }}</div>
                                                                </div>
                                                        </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                                <div class="user-card">
                                                                        <div class="user-avatar">
                                                                                <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                                <span class="lead-text">{{ ucwords(Auth::user()->name) }}</span>
                                                                                <span class="sub-text">{{ Auth::user()->email }}</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                                <ul class="link-list">
                                                                        <li><a href="{{ route('settings') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                                <ul class="link-list">
                                                                        <form method="POST" action="{{ route('logout') }}">
                                                                                @csrf
                                                                                <li><em class="icon ni ni-signout"></em><button class="btn"><span> Sign out</span></button></li>
                                                                        </form>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
</div>
<!-- main header @e -->