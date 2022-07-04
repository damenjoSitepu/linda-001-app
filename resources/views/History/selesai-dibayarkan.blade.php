<!-- Pemesanan selesai dibayarkan -->

<div class="list">
    @foreach($cartHistory3 as $history)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
        <div class="number justify-content-center">
            <h2 class="text-center rounded-circle">1</h2>
        </div>
        <div class="loc1 me-4">
            <h4 class=""><i class="fas fa-money-bill-trend-up"></i> Kode Transaksi Pemesanan :
                {{ substr(hash('ripemd160',$history->pesan_id),0,15) }}</h4>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="fw-bold w-50 text-center py-1 time rounded"><i class="fas fa-check"></i>
                    Selesai Dibayarkan Pada: {{ date('l, j-M-Y',strtotime($history->dibayar)) }}
                </p>

                
                {{-- Mendapatkan total --}}
                @php
                $getTotal = 0;

                $getMyTotal = DB::select("SELECT * FROM pesan_detail INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan_detail.pesan_id='{$history->pesan_id}'");

                foreach($getMyTotal as $total)
                    $getTotal += $total->harga * $total->qty;
                @endphp
                <p class="w-50 text-end fw-bold">Total: Rp. {{ number_format($getTotal,2,',','.') }}</p>
            </div>

            <div class="d-flex mt-4">
                <a href="{{ route('Historial',['type' => 'tentang-menu-paketan','pesan_id' => $history->pesan_id, 'search' => 3]) }}"
                    class="buttonbros me-4 text-decoration-none text-start fs-6 w-25 d-inline-block rounded fw-bold text-center">Detail &nbsp;<i class="fas fa-list"></i></a>
                <a href="{{ route('UploadBukti',['user_id' => $getUser->user_id, 'pesan_id' => $history->pesan_id]) }}"
                    class="buttonbro text-decoration-none text-start d-block w-25  rounded fw-bold text-center ">Upload
                    Bukti Pembayaran &nbsp;<i class="fas fa-file"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- akhir pemesanan selesai dibayarkan -->