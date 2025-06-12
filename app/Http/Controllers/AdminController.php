<?php

// App\Http\Controllers\AdminController.php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahArsip = Arsip::count();
        $jumlahKategori = Kategori::count();

        return view('admin.dashboard', compact('jumlahArsip', 'jumlahKategori'));
    }
}

