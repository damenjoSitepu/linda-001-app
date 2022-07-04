@extends('component.main')

@section('contents')
<div class="container mt-4">
<div class="halaman-profil-user d-flex justify-content-between">
    <!-- Sisi Kiri -->
    <div class="profil-left w-25">
     
        <a id="{{ $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('User') }}">Informasi Utama</a>
        <a id="{{ $type == 'data-umum'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserInfo',['type' => 'data-umum']) }}">Data Umum</a>
        <a id="{{ $type == 'konfigurasi-keamanan'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('UserInfo',['type' => 'konfigurasi-keamanan']) }}">Konfigurasi Keamanan </a>
        <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Home') }}"><i
                class="fas fa-arrow-right-from-bracket"></i> Kembali Ke Beranda </a>
    </div>
    <!-- Sisi Kanan -->
    <div class="profil-right w-75 ps-5 mb-5">
        <div class="profil-right">

            @if($type === 'informasi-utama' || $type === '')
                    @include('user.informasi-utama')
                @elseif($type === 'data-umum')
                    @include('user.data-umum')
                @elseif($type === 'konfigurasi-keamanan')
                    @include('user.konfigurasi-keamanan')
                @else
                    @include('user.informasi-utama')
            @endif

        </div>


    </div>



</div>
@endsection