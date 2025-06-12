<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Pastikan user sudah login sebelum bisa mengakses controller ini
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Hitung jumlah total arsip dan kategori dari database
        $jumlahArsip = Arsip::count();
        $jumlahKategori = Kategori::count();

        // Kirim data ke view dashboard
        return view('pages.dashboard', compact('jumlahArsip', 'jumlahKategori'));
    }
}
