@extends('component.main')

@section('contents')

<!-- Halaman produk admin -->
<div class="container mt-4">
    <div class="halaman-profil-admin d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == 'informasi-produk' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProdukAdminDetail',['type' => 'informasi-produk', 'product_id' => $getProduk->produk_id]) }}">Informasi Produk</a>
            <a id="{{ $type == 'sunting-foto-produk' || $type == ''? "active-link" : "" }}"  class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProdukAdminDetail',['type' => 'sunting-foto-produk', 'product_id' => $getProduk->produk_id]) }}">Sunting Foto Produk</a>
            <a id="{{ $type == 'tambahkan-spesifikasi' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProdukAdminDetail',['type' => 'tambahkan-spesifikasi', 'product_id' => $getProduk->produk_id]) }}">Tambahkan Spesifikasi</a>
            <a id="{{ $type == 'tambahkan-kelebihan' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProdukAdminDetail',['type' => 'tambahkan-kelebihan', 'product_id' => $getProduk->produk_id]) }}">Tambahkan Kelebihan</a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('DeleteProdukAdminDetail',['product_id' => $getProduk->produk_id]) }}">Hapus Produk Ini</a>

            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductAdmin') }}"><i
                class="fas fa-arrow-right-from-bracket"></i> Kembali </a> 
        </div>

       
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">
            <div class="profil-right">
                @if ($type == 'informasi-produk')
                    @include ('product.informasi-produk')
                @elseif ($type == 'sunting-foto-produk')
                    @include('product.sunting-foto-produk')
                @elseif ($type == 'tambahkan-spesifikasi')
                    @include('product.tambahkan-spesifikasi')
                    @elseif ($type == 'tambahkan-kelebihan')
                    @include('product.tambahkan-kelebihan')
                @else 
                    @include('product.informasi-produk')
                @endif
            </div>

        </div>

    </div>
</div>
<!-- akhir halaman produk admin -->
@endSection