<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('files.index'); // Pastikan view ini ada: resources/views/files/index.blade.php
    }
}
