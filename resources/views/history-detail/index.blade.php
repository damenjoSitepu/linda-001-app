@extends('component.main')

@section('contents')
<div class="container mt-4">

    <div class="halaman-profil-user d-flex justify-content-between">
        <!-- Sisi Kiri -->
        <div class="profil-left w-25">
            <a id="{{ $type == 'pemesanan-paketan' || $type == ''? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Historial',['type' => 'pemesanan-paketan', 'pesan_id' => $getPesan->pesan_id, 'search' => 1]) }}">Pemesanan Paketan</a>
            <a id="{{ $type == 'informasi-pembayaran    '? "active-link" : "" }}" class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('Historial',['type' => 'informasi-pembayaran', 'pesan_id' => $getPesan->pesan_id, 'search' => 1]) }}">Informasi Pembayaran</a>
            <a  class="link fs-5 py-3 px-4 text-decoration-none d-block fw-bold" href="{{ route('History',['search' => $search]) }}">Kembali </a>
        </div>
        <!-- Sisi Kanan -->
        <div class="profil-right w-75 ps-5 mb-5">

                @if($type === 'pemesanan-paketan' || $type === '')
                    @include('history-detail.pemesanan-pompa')
                @elseif($type === 'informasi-pembayaran')
                    @include('history-detail.ajukan-pemesanan')
                @else
                    @include('history-detail.pemesanan-pompa')
            @endif

        </div>



    </div>



</div>



    </div>



</div>

@endsection