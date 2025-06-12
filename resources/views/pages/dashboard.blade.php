@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    {{-- Top Navigation --}}
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])

    <div class="container-fluid py-4 position-relative">
        {{-- Alert Sambutan --}}
        @auth
            <div id="welcomeAlert" class="alert alert-success text-white welcome-toast position-absolute top-0 start-50 translate-middle-x shadow-lg rounded-4" role="alert">
                <strong>Selamat datang {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}!</strong>
            </div>
        @endauth

        {{-- Tombol Aksi --}}
        @auth
            <div class="mb-3">
                <a href="{{ route('about') }}" class="btn btn-info mb-3 animate-button">
                    <i class="ni ni-single-copy-04 me-2"></i> 
                    <span class="d-none d-sm-inline">Lihat Daftar SOP</span>
                </a>
            </div>
        @endauth

        <div class="row">
            {{-- Card: Jumlah Data SOP --}}
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
                <div class="card card-hover border-0 shadow-sm rounded-4 animate-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                            <a href="{{ route('arsip') }}" class="text-sm mb-0 text-uppercase font-weight-bold text-primary">
                                Data SOP
                            </a>
                        <div class="card-count-custom">
                            {{ $jumlahArsip ?? '0' }}
                        </div>
                            </div>
                            <div class="ms-3 text-center">
                                <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow-sm">
                                    <i class="ni ni-archive-2 text-lg opacity-10"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card: Jumlah Kategori SOP --}}
            @if(in_array(auth()->user()->role, ['admin', 'pegawai']))
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
                    <div class="card card-hover border-0 shadow-sm rounded-4 animate-card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <a href="{{ route('arsip') }}" class="text-sm mb-0 text-uppercase font-weight-bold text-primary">
                                    Kategori SOP
                                    </a>
                                <div class="card-count-custom">
                                    {{ $jumlahKategori ?? '0' }}
                                </div>
                                </div>
                                <div class="ms-3 text-center">
                                    <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow-sm">
                                        <i class="ni ni-email-83 text-lg opacity-10"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- Footer --}}
    @include('layouts.footers.auth.footer')

    {{-- Custom Style --}}
    <style>
        .welcome-toast {
            z-index: 1055;
            margin-top: 24px;
            padding: 12px 18px;
            font-size: 13px;
            border-radius: 12px;
            animation: slideFadeIn 0.8s ease, slideFadeOut 0.8s ease 4s;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .animate-card {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
        }

        .animate-card:nth-child(1) {
            animation-delay: 0.2s;
        }
        .animate-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .animate-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .animate-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
        }

        .animate-button:hover::after {
            left: 100%;
        }

        @keyframes slideFadeIn {
            0% { opacity: 0; transform: translateY(-20px) scale(0.9); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes slideFadeOut {
            0% { opacity: 1; transform: translateY(0) scale(1); }
            100% { opacity: 0; transform: translateY(-10px) scale(0.9); }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
.transition-sidenav {
    transition: transform 0.3s ease;
}

#sidenav-overlay {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1049;
}

#sidenav-overlay.active {
    display: block;
}

@media (max-width: 576px) {
    .welcome-toast {
        font-size: 10px !important; /* untuk HP */
    }
    #sidenav-main {
        transform: translateX(-100%);
        z-index: 1050;
        width: 250px;
    }

    #sidenav-main.active {
        transform: translateX(0);
    }
}

    </style>

    {{-- Auto Dismiss Script --}}
    <script>
        setTimeout(() => {
            const alertEl = document.getElementById('welcomeAlert');
            if (alertEl) {
                alertEl.remove();
            }
        }, 4800); // 4s + 0.8s buffer
document.addEventListener("DOMContentLoaded", function () {
    const sidenav = document.getElementById("sidenav-main");
    const overlay = document.getElementById("sidenav-overlay");
    const toggle = document.getElementById("menuToggle");
    const closeBtn = document.getElementById("iconSidenav");

    toggle?.addEventListener("click", function () {
        sidenav.classList.add("active");
        overlay.classList.add("active");
    });

    overlay?.addEventListener("click", function () {
        sidenav.classList.remove("active");
        overlay.classList.remove("active");
    });

    closeBtn?.addEventListener("click", function () {
        sidenav.classList.remove("active");
        overlay.classList.remove("active");
    });
});
</script>

@endsection
