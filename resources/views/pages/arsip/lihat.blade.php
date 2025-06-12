@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Data SOP'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>SOP BRMP JAMBI >> Lihat</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th style="width: 40%">No</th>
                                    <td style="width: 5%">:</td>
                                    <td>{{ $surat->nomor_surat }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori SOP</th>
                                    <td>:</td>
                                    <td>{{ optional($surat->kategori)->nama_kategori }}</td>
                                </tr>
                                <tr>
                                    <th>Nama SOP</th>
                                    <td>:</td>
                                    <td>{{ $surat->judul }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor SOP</th>
                                    <td>:</td>
                                    <td>{{ $surat->nomor_sop }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pembuatan</th>
                                    <td>:</td>
                                    <td>{{ \Carbon\Carbon::parse($surat->tanggal_pembuatan)->translatedFormat('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Revisi</th>
                                    <td>:</td>
                                    <td>{{ $surat->tanggal_revisi ? \Carbon\Carbon::parse($surat->tanggal_revisi)->translatedFormat('d F Y') : '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <br>
                    <!-- PDF Viewer -->
                    <div id="pdf-viewer" style="height: 85vh;">
                        <iframe id="pdf-js-viewer"
                            src="{{ asset('pdfjs/web/viewer.html') }}?file={{ urlencode(asset('storage/file_surat/' . $surat->file_surat)) }}"
                            width="100%" height="100%" allowfullscreen webkitallowfullscreen></iframe>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('arsip') }}" class="btn btn-secondary">⬅ Kembali</a>
                        <a href="{{ asset('storage/file_surat/' . $surat->file_surat) }}" download="{{ $surat->judul }}.pdf" class="btn btn-kuning">
                            <i class="fas fa-download"></i> Unduh
                        </a>
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('arsip.edit', ['id' => $surat->id]) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit File
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #pdf-js-viewer {
    border: none;
    width: 100%;
    height: 100%;
}

/* Supaya padding di sekitar iframe dihapus pada mobile */
@media (max-width: 576px) {
    #pdf-viewer {
        margin: 0 !important;
        padding: 0 !important;
        height: 90vh !important;
    }
    iframe#pdf-js-viewer {
        height: 100% !important;
    }
}
        @media (max-width: 576px) {
            .card-body { padding: 1rem !important; }
            .card-footer .btn {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
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
        .animate-card:nth-child(1) { animation-delay: 0.2s; }
        .animate-card:nth-child(2) { animation-delay: 0.4s; }
        .animate-button::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
        }
        .animate-button:hover::after { left: 100%; }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
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
