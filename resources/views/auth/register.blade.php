@extends('layouts.app')

@section('content')
<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-50 pt-3 pb-6 border-radius-lg"
         style="background-image: url('{{ asset('img/balai.jpg') }}'); background-position: center; background-size: cover;">
        <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                    <p class="text-lead text-white">Aplikasi SOP BRMP JAMBI</p>
                </div>

                <div class="container">
                    <div class="row mt-3 justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h5>Register</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register.perform') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                                            @error('username') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" name="firstname" class="form-control" placeholder="Nama Depan" value="{{ old('firstname') }}">
                                            @error('firstname') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" name="lastname" class="form-control" placeholder="Nama Belakang" value="{{ old('lastname') }}">
                                            @error('lastname') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                            @error('email') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            @error('password') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="form-check form-check-info text-start mb-3">
                                            <input class="form-check-input" type="checkbox" name="terms" id="terms">
                                            <label class="form-check-label" for="terms">
                                                Saya setuju dengan <a href="javascript:;" class="font-weight-bold text-green-gradient">syarat dan ketentuan</a>
                                            </label>
                                            @error('terms') <div class="text-danger text-xs pt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Daftar</button>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="font-weight-bold text-green-gradient">Masuk</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /container -->
            </div>
        </div>
    </div>
</main>
@endsection
