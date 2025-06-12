{{-- Overlay (klik luar untuk nutup menu) --}}
<div id="sidenav-overlay"></div>

<aside id="sidenav-main" class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start shadow-lg transition-sidenav">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary position-absolute end-0 top-0 d-md-none" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <img src="{{ asset('img/brmp.jpg') }}" class="navbar-brand-img" style="height: 20px;" alt="main_logo">
            <span class="ms-1 font-weight-bold">SOP BRMP JAMBI</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(auth()->user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-danger"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard Admin</span>
                </a>
            </li>
            @elseif(auth()->user()->role === 'pegawai')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'pegawai.dashboard' ? 'active' : '' }}" href="{{ route('pegawai.dashboard') }}">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-danger"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard Pegawai</span>
                </a>
            </li>
            @endif

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'arsip' ? 'active' : '' }}" href="{{ route('arsip') }}">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-archive-2 text-warning"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data SOP</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kategori' ? 'active' : '' }}" href="{{ route('kategori') }}">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-email-83 text-success"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kategori SOP</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-info"></i>
                    </div>
                    <span class="nav-link-text ms-1">Daftar SOP</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
