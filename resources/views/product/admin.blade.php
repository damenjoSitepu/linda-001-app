@extends('component.main') 


@section('contents')
 <!-- Halaman produk admin -->
 <div class="container mt-4">
    <div class="halaman-profil-admin d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductAdmin') }}">Daftar Pompa Air</a>
            <a id="{{ $type == 'buat-produk'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductAdminInfo',['type' => 'buat-produk']) }}">Buat Produk</a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Home') }}"><i
                    class="fas fa-arrow-right-from-bracket"></i> Kembali </a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">
            <div class="profil-right">

                @if($type === 'daftar-produk' || $type === '')
                    @include('product.daftar-produk')
                @elseif($type === 'buat-produk')
                    @include('product.buat-produk')
                @else
                    @include('product.daftar-1')
                @endif

            </div>


        </div>



    </div>
</div>
<!-- akhir halaman produk admin -->

@endSection