<!-- transaksi berhasil diverifikasi -->

<div class="list">
    @foreach($cartHistory4 as $history)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
        <div class="number justify-content-center">
            <h2 class="text-center rounded-circle">{{ $loop->iteration }}</h2>
        </div>
        <div class="loc1 me-4">
            <h4 class=""><i class="fas fa-money-bill-trend-up"></i> Kode Transaksi Pemesanan :
                {{ substr(hash('ripemd160',$history->pesan_id),0,15) }}</h4>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="fw-bold w-75 text-center py-1 time rounded"><i class="fas fa-hourglass-end"></i>
                    Transaksi Diverifikasi Dan Berhasil Pada: {{ date('l, j-M-Y',strtotime($history->diverifikasi)) }}
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

            <a href="{{ route('Historial',['type' => 'tentang-menu-paketan','pesan_id' => $history->pesan_id, 'search' => 4]) }}"
                class="buttonbros text-decoration-none text-start fs-6 w-25 d-inline-block rounded fw-bold text-center">Detail &nbsp;<i class="fas fa-list"></i></a>
        </div>
    </div>
    @endforeach
</div>


<!-- akhir transaksi berhasil diverifikasi -->