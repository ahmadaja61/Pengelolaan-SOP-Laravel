@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Data SOP'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>SOP BRMP JAMBI</h2>
                        <div class="search-wrapper d-flex flex-wrap align-items-center mt-4 gap-2">
                            <span class="me-2">Cari:</span>
                            <div class="flex-grow-1 flex-md-shrink-0"> 
                                <input type="text" class="form-control" id="searchJudul"
                                    placeholder="Masukkan Nama SOP">
                            </div>
                            <button class="btn btn-primary ms-2 my-auto" id="btnSearchJudul" aria-label="Cari">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body ">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori SOP</th>
                                        <th>Nama SOP</th>
                                        <th>Nomor SOP</th> 
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Revisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <th>{{ $row->nomor_surat }}</th>
                                            <td>{{ optional($row->kategori)->nama_kategori }}</td>
                                            <td>{{ $row->judul }}</td>
                                            <td>{{ $row->nomor_sop }}</td> {{-- Tambahkan baris ini --}}
                                            <td>{{ \Carbon\Carbon::parse($row->tanggal_pembuatan)->format('d-m-Y') }}</td>
                                            <td>{{ $row->tanggal_revisi ? \Carbon\Carbon::parse($row->tanggal_revisi)->format('d-m-Y') : '-' }}</td>
                                            <td>
                                                        @if(Auth::user()->role == 'admin')
                                                <a href="{{ route('arsip.hapus', ['id' => $row->id]) }}" class="btn btn-danger"
                                                    onclick="return confirm('Anda yakin ingin menghapus data kategori surat ini?');"><i
                                                        class="fas fa-trash"></i> Hapus</a>
                                                        @endif
                                                <a href="{{ asset('storage/file_surat/' . $row->file_surat) }}" download="{{ $row->judul }}.pdf"
                                                    class="btn btn-kuning"><i class="fas fa-download"></i> Unduh</a>
                                                <a href="{{ route('arsip.lihat', $row->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                            </td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('arsip.tambah') }}" class="btn btn-success">[+] Tambahkan Data SOP</a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #menuToggle {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    min-width: 44px; /* aksesibilitas minimum */
    min-height: 44px;
}

/* Khusus untuk HP */
@media (max-width: 576px) {
    #menuToggle {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
}

        .table th,
        .table td {
            text-align: center;
        }

        .table thead th {
            vertical-align: middle;
        }
        
    /* Tabel responsif di layar kecil */
    .table-responsive {
        -webkit-overflow-scrolling: touch; /* Menambahkan scroll untuk layar sentuh */
        overflow-x: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    /* Memperbesar font pada judul agar lebih jelas pada layar kecil */
    @media (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        .table th, .table td {
            font-size: 0.8rem; /* Menyesuaikan ukuran font */
        }
    }

    /* Menyesuaikan tombol pencarian */
    @media (max-width: 576px) {
        .d-flex {
            flex-direction: column; /* Menyusun elemen dalam kolom pada perangkat kecil */
            align-items: stretch;
        }
        .col-6 {
            width: 100%;
        }
        /* Tombol pencarian lebih responsif */
.btn {
    padding: 0.375rem 0.75rem;
}

@media (max-width: 576px) {
    .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.9rem;
    }
}

    }
    
    h2.responsive-title {
        /* Ukuran font responsif untuk h2 */
        font-size: 13px;
    }

    /* Pengaturan dasar pencarian */
.search-wrapper {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 0.5rem; /* Jarak antar elemen */
    flex-wrap: nowrap; /* Mencegah elemen turun ke baris berikutnya */
}

.search-label {
    white-space: nowrap; /* Supaya tulisan tidak terpotong */
    font-size: 1rem;
}

/* Responsif untuk layar kecil */
@media (max-width: 576px) {
    .search-wrapper {
        gap: 0.3rem; /* Jarak antar elemen lebih kecil */
    }

    .search-label {
        font-size: 0.9rem; /* Ukuran font lebih kecil */
    }

    .search-wrapper input {
        width: 100%; /* Input memanjang mengikuti lebar layar */
    }

    .search-wrapper button {
        flex-shrink: 0; /* Agar tombol tidak menyusut */
    }
}

/* Pengaturan ukuran input dan tombol */
input[type="text"] {
    min-width: 200px;
}

button.btn {
    min-width: 40px;
}

    .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    @media (max-width: 576px) {
    .search-wrapper {
        flex-direction: row; /* tetap sebaris */
        align-items: stretch;
    }

    .search-wrapper .search-label {
        font-size: 0.9rem;
        white-space: nowrap;
    }

    .search-wrapper input {
        min-width: 0;
        width: 100%;
    }

    .search-wrapper button {
        width: auto;
        white-space: nowrap;
    }

    .search-wrapper > * {
        flex: 1 1 auto;
    }
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
        document.getElementById('btnSearchJudul').addEventListener('click', function() {
            var searchValue = document.getElementById('searchJudul').value.toLowerCase();
            var rows = document.querySelectorAll('.table tbody tr');

            rows.forEach(function(row) {
                var name = row.children[2].textContent.toLowerCase();
                if (name.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
        
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
        document.addEventListener('DOMContentLoaded', function() {
            var downloadButtons = document.querySelectorAll('.btn-download');

            downloadButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Dapatkan URL file dari atribut data
                    var fileUrl = this.getAttribute('data-file-url');

                    // Minta pengguna untuk memilih direktori penyimpanan
                    var directoryPath = prompt(
                        'Masukkan direktori penyimpanan (cth: /path/to/directory)');

                    if (directoryPath) {
                        // Gunakan FileSaver.js untuk menyimpan file ke direktori yang dipilih
                        fetch(fileUrl)
                            .then(response => response.blob())
                            .then(blob => saveAs(blob, directoryPath + '/' + fileUrl.split('/')
                            .pop()));
                    }
                });
            });
        });
    </script>

<!-- Tambahkan di bagian head atau sebelum penutup tag body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    @include('layouts.footers.auth.footer')
@endsection
