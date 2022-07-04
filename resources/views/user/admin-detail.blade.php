@extends('component.main')

@section('contents')

<!-- Halaman user admin -->
<div class="container mt-4">

    <div class="halaman-profil-user d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == 'sunting-user' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserAdminDetail',['type' => 'sunting-user', 'user_id' => 1]) }}">Sunting User</a>
            <a id="{{ $type == 'ubah-foto-user' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserAdminDetail',['type' => 'ubah-foto-user', 'user_id' => 1]) }}">Ubah Foto User</a>
            <a id="{{ $type == 'konfigurasi-keamanan' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserAdminDetail',['type' => 'konfigurasi-keamanan', 'user_id' => 1]) }}">Konfigurasi Keamanan </a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="">Hapus User Ini </a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserAdmin') }}"><i
                    class="fas fa-arrow-right-from-bracket"></i> Kembali </a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">
            <div class="profil-right">
                @if ($type == 'sunting-user')
                    @include ('user.sunting-user')
                @elseif ($type == 'ubah-foto-user')
                    @include('user.ubah-foto-user')
                @elseif ($type == 'konfigurasi-keamanan')
                    @include('user.konfigurasi-keamanan-admin')
                @else 
                    @include('user.sunting-user')
                @endif
            </div>


        </div>



    </div>
</div>
<!-- akhir halaman produk admin -->

@endSection