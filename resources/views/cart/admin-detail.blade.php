@extends('component.main')

@section('contents')
<!-- Halaman Add to cart User -->
<div class="container mt-4">


    <div class="halaman-profil-user d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == 'pemesanan-pompa' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('CartAdminDetail',['type' => 'pemesanan-pompa', 'user_id' => $user_id, 'pesan_id' => $pesan_id]) }}">Pemesanan Pompa</a>
      
            <a id="{{ $type == 'status-pesanan'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('CartAdminDetail',['type' => 'status-pesanan', 'user_id' => $user_id, 'pesan_id' => $pesan_id]) }}">Status Pesanan</a>
            <a class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('CartAdmin') }}">Kembali</a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">

            @if ($type == 'pemesanan-pompa')
                @include ('cart.admin-pemesanan-pompa')
            @elseif ($type == 'status-pesanan')
                @include('cart.status-pesanan')
            @else 
                @include('cart.pemesanan-pompa')
            @endif
        </div>
    </div>

    
</div>

<!-- Akhir Halaman add to cart User -->

@endSection