<!-- Menunggu konfirmasi admin -->
<div class="list">
    @foreach($cartHistory1 as $history)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
        <div class="number justify-content-center">
            <h2 class="text-center rounded-circle">{{ $loop->iteration }}</h2>
        </div>
        <div class="loc1 me-4 mt-5">
            <h4 class=""><i class="fas fa-money-bill-trend-up d-inline-block"></i> Kode Transaksi Pemesanan :
                {{ substr(hash('ripemd160',$history->pesan_id),0,15) }}</h4> 
                <a href="{{ route('Historial',['type' => 'tentang-menu-paketan','pesan_id' => $history->pesan_id, 'search' => 1]) }}"
                class="buttonbros text-decoration-none text-start fs-6 w-25 d-inline-block rounded fw-bold text-center">Detail &nbsp;<i class="fas fa-list"></i></a>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="fw-bold w-50 text-center py-1 time rounded"><i class="fas fa-calendar"></i>  &nbsp;       
                    Dibuat Pada: {{ date('l, j-M-Y',strtotime($history->dibuat)) }}
                </p>
               
                @php
                $user_id = session()->get('login')['user_id'];
                // Dapatkan masing-masing total pesanan yang ada per pesan id
                $getData = DB::select("SELECT * FROM pesan_detail INNER JOIN pesan ON pesan_detail.pesan_id = pesan.pesan_id INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan.user_id='{$user_id}' AND pesan_detail.status=1 AND pesan.pesan_id='{$history->pesan_id}'");

                $totalPrice = 0;

                foreach($getData as $data)
                    $totalPrice += $data->qty * $data->harga;

                @endphp
                <p class="w-50 text-end fw-bold">Total: Rp. {{ number_format(($totalPrice),2,',','.') }} </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- akhir menunggu konfirmasi admin -->