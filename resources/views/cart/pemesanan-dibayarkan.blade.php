<div class="list">
    @foreach($cartHistory3 as $history)
    <div class="lists d-flex align-items-center rounded p-3 mb-5">
        <h2 class="text-center text-primaries">{{ $loop->iteration }}</h2>

        <div class="name">
            <div>
                <h4>{{ $history->nama }} [ ID Pemesanan : {{ substr(hash('ripemd160',$history->pesan_id),0,10) }} ]</h4>
                <div class="d-flex justify-content-between me-4 my-2">
                    <small class="text-primary"><i class="fas fa-money-bill"></i> Dibayarkan Pada: <span class="text-primaries fw-bold">{{ date('l, j-M-Y',strtotime($history->dibayar)) }}</span></small>
                    <small class="text-primaries"><i class="fas fa-calendar"></i> Pesanan Dibuat Pada: <span class="fw-bold">{{ date('l, j-M-Y',strtotime($history->dibuat)) }}</span></small>
                </div>
            </div>

            {{-- Mendapatkan total --}}
            @php
            $getTotal = 0;

            $getMyTotal = DB::select("SELECT * FROM pesan_detail INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan_detail.pesan_id='{$history->pesan_id}'");

            foreach($getMyTotal as $total)
                $getTotal += $total->harga * $total->qty;
            @endphp
            <small class="text-danger fw-bold">Total: {{ number_format($getTotal,2,',','.') }}</small>
        </div>

        <div class="status">
            <button class="buttonbro d-block w-100 rounded fw-bold "><i class="fas fa-clock"></i> Konfirmasi Bukti Pembayaran</button>

            <hr>

            <div class="d-flex">
                <a href="{{ route('KonfirmasiBukti',['user_id' => $history->user_id, 'pesan_id' => $history->pesan_id]) }}" class="buttonbros text-decoration-none d-block w-50 rounded fw-bold ">Konfirmasi</a>

                <a href="{{ route('CartAdminDetail',['type' => 'pemesanan-pompa','user_id' => $history->user_id, 'pesan_id'  => $history->pesan_id]) }}"
                    class="ms-4 buttonbros text-decoration-none d-inline-block w-50 rounded fw-bold ">Lihat
                    Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>