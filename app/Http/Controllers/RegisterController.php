<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Menampilkan form registrasi
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Menyimpan data registrasi user baru
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $attributes = $request->validate([
            'username'  => 'required|max:255|min:2|unique:users,username',
            'firstname' => 'required|max:255|min:2',
            'lastname'  => 'required|max:255|min:2',
            'email'     => 'required|email|max:255|unique:users,email',
            'password'  => 'required|min:5|max:255',
            'terms'     => 'accepted', // Checkbox menyetujui syarat & ketentuan harus dicentang
        ]);

        // Simpan user baru ke database dengan role default "pegawai"
        $user = User::create([
            'username'  => $attributes['username'],
            'firstname' => $attributes['firstname'],
            'lastname'  => $attributes['lastname'],
            'email'     => $attributes['email'],
            'password'  => $attributes['password'], // Enkripsi password
            'role'      => 'pegawai',
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
