@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Daftar SOP'])

<div class="container-fluid py-4">
    <div class="card shadow border-0">
        <div class="card-body">
            <div class="text-center mb-4">
                <h4 class="text-primary fw-bold">DAFTAR STANDAR OPERASIONAL PROSEDUR (SOP)</h4>
                <p class="text-muted">Badan Perakitan dan Modernisasi Pertanian Jambi</p>
            </div>

            <ul class="nav nav-tabs mb-3" id="sopTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="makro-tab" data-bs-toggle="tab" data-bs-target="#makro" type="button" role="tab">SOP Makro</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mikro-tab" data-bs-toggle="tab" data-bs-target="#mikro" type="button" role="tab">SOP Mikro</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="semua-tab" data-bs-toggle="tab" data-bs-target="#semua" type="button" role="tab">SOP Keseluruhan</button>
                </li>
            </ul>

            <div class="tab-content" id="sopTabsContent">
                {{-- SOP Makro --}}
                <div class="tab-pane fade show active" id="makro" role="tabpanel">
                    <input type="text" class="form-control form-control-sm mb-3" placeholder="Cari SOP Makro..." onkeyup="searchTable('makroTable', this)">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-sm text-center" id="makroTable">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama SOP</th>
                                    <th>Nomor SOP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sopMakro = [
                                        ['I.11','Sistem Penyampaian Informasi dan Komunikasi Intern Balai','I.11/OT.225/H.12.7/01/2024'],
                                        ['I.12','Sistem Pengendalian Intern','I.12/OT.225/H.12.7/01/2024'],
                                        ['I.47','Pengadaan Langsung Barang dan Jasa 2-200 Juta','I.47/OT.225/H.12.7/01/2024'],
                                        ['III.1','Penyiapan Matrik Kegiatan BPSIP','III.1/OT.225/H.12.7/01/2024'],
                                        ['III.2','Penyusunan Proposal BPSIP','III.2/OT.225/H.12.7/01/2024'],
                                        ['III.3','Pengusulan/Penyusunan Anggaran BPSIP','III.3/OT.225/H.12.7/01/2024'],
                                    ];
                                @endphp
                                @foreach($sopMakro as $sop)
                                <tr>
                                    <td>{{ $sop[0] }}</td>
                                    <td class="text-start">{{ $sop[1] }}</td>
                                    <td>{{ $sop[2] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- SOP Mikro --}}
<div class="tab-pane fade" id="mikro" role="tabpanel">
    <input type="text" class="form-control form-control-sm mb-3" placeholder="Cari SOP Mikro..." onkeyup="searchTable('mikroTable', this)">
    <div class="table-responsive">
        <table class="table table-striped table-hover text-sm text-center" id="mikroTable">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama SOP</th>
                    <th>Nomor SOP</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sopMikro = [
                        ['I.1', 'Front Office/Penerima Tamu', 'I.1/OT.225/H.12.7/01/2024'],
                        ['I.2', 'Pengagendaan Surat Masuk', 'I.2/OT.225/H.12.7/01/2024'],
                        ['I.3', 'Pengagendaan Surat Keluar', 'I.3/OT.225/H.12.7/01/2024'],
                        ['I.4', 'Kebersihan Kantor', 'I.4/OT.225/H.12.7/01/2024'],
                        ['I.5', 'Keamanan Kantor', 'I.5/OT.225/H.12.7/01/2024'],
                        ['I.6', 'Pemeliharaan Gedung Kantor', 'I.6/OT.225/H.12.7/01/2024'],
                        ['I.7', 'Pemeliharaan Halaman Gedung Kantor', 'I.7/OT.225/H.12.7/01/2024'],
                        ['I.8', 'Pemeliharaan Jaringan (Listrik, Telepon, Internet, PDAM, Intercom)', 'I.8/OT.225/H.12.7/01/2024'],
                        ['I.9', 'Peminjaman Ruang Rapat', 'I.9/OT.225/H.12.7/01/2024'],
                        ['I.10', 'Peminjaman Kendaraan Dinas', 'I.10/OT.225/H.12.7/01/2024'],
                        ['I.13', 'Pengusulan Penetapan Rumah Negara', 'I.13/OT.225/H.12.7/01/2024'],
                        ['I.14', 'Tindak Lanjut Hasil Pemeriksaan (LHP)', 'I.14/OT.225/H.12.7/01/2024'],
                        ['I.15', 'Pemantauan dan Evaluasi Resiko', 'I.15/OT.225/H.12.7/01/2024'],
                        ['I.16', 'Penyusunan SIMAK BMN', 'I.16/OT.225/H.12.7/01/2024'],
                        ['I.17', 'Peminjaman Barang Milik Negara', 'I.17/OT.225/H.12.7/01/2024'],
                        ['I.18', 'Penatausahaan Barang', 'I.18/OT.225/H.12.7/01/2024'],
                        ['I.19', 'Pengajuan Surat Permintaan Pembayaran Langsung (LS)', 'I.19/OT.225/H.12.7/01/2024'],
                        ['I.20', 'Verifikasi Pengajuan Dana', 'I.20/OT.225/H.12.7/01/2024'],
                        ['I.21', 'Pembuatan Daftar Gaji', 'I.21/OT.225/H.12.7/01/2024'],
                        ['I.22', 'Pengajuan Surat Permintaan Pembayaran Ganti Uang (GU/GUP)', 'I.22/OT.225/H.12.7/01/2024'],
                        ['I.23', 'Pembayaran Juru Bayar/PUM', 'I.23/OT.225/H.12.7/01/2024'],
                        ['I.24', 'Pembukuan Pajak', 'I.24/OT.225/H.12.7/01/2024'],
                        ['I.25', 'Pembuatan Impasing Gaji Pegawai', 'I.25/OT.225/H.12.7/01/2024'],
                        ['I.26', 'Permintaan dan Pertanggungjawaban Uang Muka Kerja', 'I.26/OT.225/H.12.7/01/2024'],
                        ['I.27', 'Permintaan dan Pertanggungjawaban Uang Muka Perjalanan Dinas', 'I.27/OT.225/H.12.7/01/2024'],
                        ['I.28', 'Kegiatan Pengelolaan PNBP', 'I.28/OT.225/H.12.7/01/2024'],
                        ['I.29', 'Pengadaan Langsung Barang dan Jasa < 200 Juta', 'I.29/OT.225/H.12.7/01/2024'],
                        ['I.30', 'Pengadaan Bahan', 'I.30/OT.225/H.12.7/01/2024'],
                        ['I.31', 'Permintaan dan Penggunaan Barang Persediaan', 'I.31/OT.225/H.12.7/01/2024'],
                        ['I.32', 'Pembuatan Daftar Nominatif dan DUK Pegawai/SIMASN', 'I.32/OT.225/H.12.7/01/2024'],
                        ['I.33', 'Penugasan Diklat Prajabatan', 'I.33/OT.225/H.12.7/01/2024'],
                        ['I.34', 'Pengajuan Cuti Pegawai', 'I.34/OT.225/H.12.7/01/2024'],
                        ['I.35', 'Pengusulan Formasi Pegawai Baru', 'I.35/OT.225/H.12.7/01/2024'],
                        ['I.36', 'Pengangkatan CPNS Menjadi PNS', 'I.36/OT.225/H.12.7/01/2024'],
                        ['I.37', 'Pengusulan Kenaikan Pangkat PNS', 'I.37/OT.225/H.12.7/01/2024'],
                        ['I.38', 'Penetapan SK Berkala PNS', 'I.38/OT.225/H.12.7/01/2024'],
                        ['I.39', 'Analisis LRA, LO, LPE, dan Neraca Tingkat Wilayah', 'I.39/OT.225/H.12.7/01/2024'],
                        ['I.40', 'Penyusunan CaLK Tingkat Satker Eselon III', 'I.40/OT.225/H.12.7/01/2024'],
                        ['I.41', 'Penyusunan CaLK Tingkat Wilayah', 'I.41/OT.225/H.12.7/01/2024'],
                        ['I.42', 'Pembukuan Transaksi Keuangan Tingkat Satker', 'I.42/OT.225/H.12.7/01/2024'],
                        ['I.43', 'Verifikasi Tingkat Satker (Eselon III)', 'I.43/OT.225/H.12.7/01/2024'],
                        ['I.44', 'Verifikasi Laporan Keuangan Konsolidasi Wilayah', 'I.44/OT.225/H.12.7/01/2024'],
                        ['I.45', 'Penetapan Tim Zona Integritas', 'I.45/OT.225/H.12.7/01/2024'],
                        ['I.46', 'Reward dan Punishment Kinerja', 'I.46/OT.225/H.12.7/01/2024'],
                        ['I.48', 'Pengadaan Langsung Barang dan Jasa 2-200 Juta Dengan UP', 'I.48/OT.225/H.12.7/01/2024'],
                        ['I.49', 'Mutasi Pegawai', 'I.49/OT.225/H.12.7/01/2024'],
                        ['II.1', 'Penyusunan Bahan Analisis Umpan Balik Pengkajian', 'II.1/OT.225/H.12.7/01/2024'],
                        ['II.2', 'Identifikasi Hasil Pengkajian Untuk Komunikasi Kepada Pengguna', 'II.2/OT.225/H.12.7/01/2024'],
                        ['II.3', 'Penyusunan Laporan Tahunan', 'II.3/OT.225/H.12.7/01/2024'],
                        ['II.4', 'Pelayanan Informasi Dan Dokumentasi (PID)', 'II.4/OT.225/H.12.7/01/2024'],
                        ['II.5', 'Entry Data Perpustakaan', 'II.5/OT.225/H.12.7/01/2024'],
                        ['II.6', 'Penerimaan Koleksi Buku Perpustakaan', 'II.6/OT.225/H.12.7/01/2024'],
                        ['II.7', 'Pelayanan Peminjaman Buku Perpustakaan', 'II.7/OT.225/H.12.7/01/2024'],
                        ['II.8', 'Pelayanan Pengembalian Buku Perpustakaan', 'II.8/OT.225/H.12.7/01/2024'],
                        ['II.9', 'Updating Website', 'II.9/OT.225/H.12.7/01/2024'],
                        ['II.10', 'Persiapan Pameran', 'II.10/OT.225/H.12.7/01/2024'],
                        ['III.4', 'Penyusunan Laporan I-Prog', 'III.4/OT.225/H.12.7/01/2024'],
                        ['III.5', 'Penyusunan Laporan I-Monev', 'III.5/OT.225/H.12.7/01/2024'],
                        ['III.6', 'Monitoring dan Evaluasi', 'III.6/OT.225/H.12.7/01/2024']
                    ];
                @endphp
                @foreach($sopMikro as $sop)
                    <tr>
                        <td>{{ $sop[0] }}</td>
                        <td class="text-start">{{ $sop[1] }}</td>
                        <td>{{ $sop[2] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- SOP Keseluruhan --}}
<div class="tab-pane fade" id="semua" role="tabpanel">
    <input type="text" class="form-control form-control-sm mb-3" placeholder="Cari Semua SOP..." onkeyup="searchTable('semuaTable', this)">
    <div class="table-responsive">
        <table class="table table-striped table-hover text-sm text-center" id="semuaTable">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama SOP</th>
                    <th>Nomor SOP</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sopSemua = array_merge($sopMakro, $sopMikro);
                @endphp
                @foreach($sopSemua as $sop)
                    <tr>
                        <td>{{ $sop[0] }}</td>
                        <td class="text-start">{{ $sop[1] }}</td>
                        <td>{{ $sop[2] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>

            <div class="text-end text-xs text-secondary mt-4">
                <strong>FM-BPTP-JBI/SOP-01</strong> | Hal: 1 dari 1<br>
                Tgl Terbit: 21-04-2025 | Bagian Sistem Pengendalian Intern
            </div>
        </div>
    </div>
</div>

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

{{-- Script pencarian --}}
<script>
function searchTable(tableId, input) {
    const filter = input.value.toLowerCase();
    const table = document.getElementById(tableId);
    const trs = table.getElementsByTagName("tr");

    for (let i = 1; i < trs.length; i++) {
        const rowText = trs[i].innerText.toLowerCase();
        trs[i].style.display = rowText.includes(filter) ? "" : "none";
    }
}
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
