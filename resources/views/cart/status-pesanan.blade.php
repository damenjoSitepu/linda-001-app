<!-- Ajukan pemesanan -->


    @csrf
    <h4 class="text-primaries mb-3">Status Pemesanan - {{ $getUser->nama }} - ID: {{ substr(hash('ripemd160',$getPesan->pesan_id),0,15) }}</h4>

    <hr class="my-4">

    @if($getPesan->status == 1)
        @include('cart.bagian-status-pesanan.konfirmasi-1')
    @elseif($getPesan->status == 2)
        @include('cart.bagian-status-pesanan.bukti-1')
    @elseif($getPesan->status == 3)
        @include('cart.bagian-status-pesanan.bukti-2')
    @elseif($getPesan->status == 4)
        @include('cart.bagian-status-pesanan.akhir-1')
    @endif  





<!-- Akhir ajukan pemesanan  -->