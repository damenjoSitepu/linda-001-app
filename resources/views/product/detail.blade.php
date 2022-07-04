@extends('component.main')

@section('contents')
<div class="container mt-4">

    <div class="halaman-profil-user d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">

            <a id="{{ $type == 'tentang-pompa'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductDetail',['type' => 'tentang-pompa','product_id' => $getProduk->produk_id]) }}">Tentang Pompa</a>
    
            <a id="{{ $type == 'tentang-spesifikasi'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductDetail',['type' => 'tentang-spesifikasi','product_id' => $getProduk->produk_id]) }}">Spesifikasi Pompa</a>

            <a id="{{ $type == 'tentang-kelebihan'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductDetail',['type' => 'tentang-kelebihan','product_id' => $getProduk->produk_id]) }}">Kelebihan Pompa</a>

            <a id="{{ $type == 'status-paket'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('ProductDetail',['type' => 'status-paket','product_id' => $getProduk->produk_id]) }}">Status</a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Product') }}"><i
                    class="fas fa-arrow-right-from-bracket"></i> Kembali </a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">

            @if($type === 'tentang-pompa' || $type === '')
                    @include('product.tentang-pompa')
            @elseif($type === 'tentang-spesifikasi')
                @include('product.tentang-spesifikasi')
            @elseif($type === 'tentang-kelebihan')
                @include('product.tentang-kelebihan')
            @elseif($type === 'status-paket')
                    @include('product.status-paket')
            @else
                    @include('product.tentang-pompa')
            @endif

        </div>
    </div>
    <!-- Akhir Halaman Product detail User -->


            @endsection