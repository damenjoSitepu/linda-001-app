{{-- HALAMAN REGISTER  --}}

@extends('component.login')

@section('contents')

<div class="halaman-register w-100 ">
    <img src="{{ asset('assets/img/login.png') }}" alt="">
    <form action="{{ route('BuatAkun') }}" method="POST" class="halaman-logins py-4 m-auto rounded"> 
        @csrf

        <h2 class="text-center">LIRIS</h2>
        <h1 class="text-center">Pemesanan Pompa Air</h1>
        <hr class="m-auto w-75 mt-4">

        <div class="d-flex w-75 m-auto">
            <div class="input-form w-75 mb-4 mt-5 me-4">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user"></i>
                    Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="px-2 w-100">
            </div>

            <div class="input-form w-75 mb-4 mt-5">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user-lock"></i>
                    Username</label>
                <input type="text" name="username" value="{{ old('username') }}" class="px-2 w-100">
            </div>
        </div>

        <div class="d-flex jusfify-content-between w-75 m-auto">
            <div class="input-form w-50 m-auto mb-4 me-4">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-envelope"></i>
                    Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="px-2 w-100">
            </div>

            <div class="input-form w-50 mb-4 m-auto">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-key"></i>
                    Kata Sandi</label>
                <input type="password" name="password" class="px-2 w-100">
            </div>
        </div>


        <div class="d-flex jusfify-content-between w-75 m-auto mt-4">
            <a href="{{ route('Auth') }}"
                class="text-decoration-none buttonbro m-auto text-start d-block w-50 me-4 rounded fw-bold text-center"><i
                    class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
            <button type="submit"
                class="text-decoration-none buttonbro m-auto text-start d-block w-50 rounded fw-bold text-center"><i
                    class="fas fa-id-card"></i> Daftar</button>
        </div>

        <hr>

        <small class="text-primaries text-center d-block mt-4">Web App Made By Linda &copy; {{ date('Y') }}</small>
    </form>
</div>
@endsection