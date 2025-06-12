<?php

use Illuminate\Support\Facades\Route;
use App\Exports\ArsipExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\{
    HomeController,
    PageController,
    RegisterController,
    LoginController,
    AdminController,
    FileController,
    PegawaiController
};

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role === 'pegawai') {
            return redirect()->route('pegawai.dashboard');
        } else {
            return redirect()->route('home');
        }
    }
    return redirect()->route('login');
});

// Guest only
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
});

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Semua yang login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/arsip', [PageController::class, 'arsip'])->name('arsip');
    Route::get('/arsip/lihat/{id}', [PageController::class, 'arsipLihat'])->name('arsip.lihat');
});

// ✅ Admin dan Pegawai bisa melihat daftar kategori
Route::middleware(['auth', 'role:admin,pegawai'])->group(function () {
    Route::get('/kategori', [PageController::class, 'kategori'])->name('kategori');
});

// Hanya Admin yang bisa mengelola kategori & arsip
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Kategori (Admin Only)
    Route::get('/kategori/tambah', [PageController::class, 'kategoriTambah'])->name('kategori.tambah');
    Route::post('/kategori/tambah/simpan', [PageController::class, 'kategoriSimpan'])->name('kategori.tambah.simpan');
    Route::get('/kategori/edit/{id}', [PageController::class, 'kategoriEdit'])->name('kategori.edit');
    Route::post('/kategori/update/{id}', [PageController::class, 'kategoriUpdate'])->name('kategori.update');
    Route::get('/kategori/hapus/{id}', [PageController::class, 'kategoriHapus'])->name('kategori.hapus');

    // Arsip (Admin Only)
    Route::get('/arsip/tambah', [PageController::class, 'arsipTambah'])->name('arsip.tambah');
    Route::post('/arsip/tambah/simpan', [PageController::class, 'arsipSimpan'])->name('arsip.tambah.simpan');
    Route::get('/arsip/edit/{id}', [PageController::class, 'arsipEdit'])->name('arsip.edit');
    Route::put('/arsip/update/{id}', [PageController::class, 'arsipUpdate'])->name('arsip.update');
    Route::get('/arsip/hapus/{id}', [PageController::class, 'arsipHapus'])->name('arsip.hapus');
});

// Pegawai only
Route::middleware(['auth', 'role:pegawai'])->group(function () {
    Route::get('/pegawai/dashboard', [PegawaiController::class, 'index'])->name('pegawai.dashboard');
});
