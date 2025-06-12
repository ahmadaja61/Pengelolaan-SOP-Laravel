@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Kategori SOP'])
    <form action="{{ route('kategori.tambah.simpan') }}" method="post">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4"> 
                        <div class="card-header pb-0">
                            <h2 class="m-0 font-weight-bold">Kategori SOP >> Tambah</h2>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2 mt-3">
                            <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
                                <label for="id">ID Kategori</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $nextId }}" disabled>
                            </div>
                            <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            </div>
                            <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('kategori') }}" class="btn btn-secondary">⬅ Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan ✔</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
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

@include('layouts.footers.auth.footer')
@endsection

