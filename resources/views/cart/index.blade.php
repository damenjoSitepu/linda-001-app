@extends('component.main')

@section('contents')
<div class="container mt-4">

    <div class="halaman-profil-user d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == 'daftar-keranjang' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Cart') }}">Daftar Keranjang</a>
            <a id="{{ $type == 'ajukan-pemesanan'? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('CartInfo',['type' => 'ajukan-pemesanan']) }}">Ajukan Pemesanan</a>
            <a  class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Product') }}">Kembali Ke Toko </a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">

            @if($type === 'daftar-keranjang' || $type === '')
                    @include('cart.daftar-keranjang')
                @elseif($type === 'pemesanan-nasi-box')
                    @include('cart.pemesanan-nasi-box')
                @elseif($type === 'ajukan-pemesanan')
                    @include('cart.ajukan-pemesanan')
                @else
                    @include('cart.daftar-keranjang')
            @endif

        </div>



    </div>



</div>



    </div>



</div>

@endsection