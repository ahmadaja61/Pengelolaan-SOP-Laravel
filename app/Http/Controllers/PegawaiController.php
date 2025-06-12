<?php

// App\Http\Controllers\PegawaiController.php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        
        $jumlahArsip = Arsip::count();
        $jumlahKategori = Kategori::count();

        return view('pegawai.dashboard', compact('jumlahArsip', 'jumlahKategori'));
    }
}
