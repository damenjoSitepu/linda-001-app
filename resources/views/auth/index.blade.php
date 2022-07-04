{{-- HALAMAN LOGIN --}}

@extends('component.login')

@section('contents')
<div class="halaman-login w-100 ">
    <img src="{{ asset('assets/img/login.png') }}" alt="">
    <form action="{{ route('LoginAkun') }}" method="POST" class="halaman-logins py-4 m-auto rounded">
        @csrf
        <h2 class="text-center">LIRIS</h2>
        <h1 class="text-center">Pemesanan Pompa Air</h1>

        <div class="d-flex w-75 m-auto mt-5">
            <div class="input-form w-50 mb-5 me-4">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user"></i>
                    Nama Pengguna</label>
                <input type="text" name="username" value="{{ old('username') }}" class="px-2 w-100">
            </div>
    
            <div class="input-form w-50 mb-5">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-key"></i>
                    Kata Sandi</label>
                <input type="password" name="password" class="px-2 w-100">
            </div>
        </div>

        <div class="d-flex jusfify-content-between w-75 m-auto">
            <button type="submit" class="buttonbro m-auto text-start d-block w-50 me-4 rounded fw-bold text-center"><i
                    class="fas fa-shop"></i> Masuk</button>
            <a href="{{ route('Registrasi') }}"
                class="text-decoration-none buttonbro m-auto text-start d-block w-50 rounded fw-bold text-center"><i
                    class="fas fa-id-card"></i> Daftar</a>
        </div>
        <a href="{{ route('Home') }}"
        class="text-decoration-none buttonbro m-auto mt-4 text-start d-block w-75 rounded fw-bold text-center"><i
            class="fas fa-arrow-right-from-bracket"></i> Pergi Ke Beranda</a>

        <hr>

        <small class="text-primaries text-center d-block mt-4">Web App Made By Linda &copy; {{ date('Y') }}</small>
    </form>
</div>
@endsection