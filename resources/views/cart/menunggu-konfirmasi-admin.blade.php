<div class="list">
    @foreach($cartHistory1 as $history)
    <div class="lists d-flex align-items-center rounded p-3 mb-5">
        <h2 class="text-center text-primaries">1</h2>

        <div class="name">
            <div>
                <h4>{{ $history->nama }} [ ID Pemesanan : {{ substr(hash('ripemd160',$history->pesan_id),0,10) }} ]</h4>
                <h6><i class="fas fa-calendar text-primary"></i> Pesanan Dibuat Pada: <span class="text-primaries">{{ date('l, j-M-Y',strtotime($history->dibuat)) }}</span></h6>
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
            <button class="buttonbro d-block w-100 rounded fw-bold "><i class="fas fa-clock"></i> Menunggu
                Konfirmasi Pemesanan</button>

            <hr>

            <div class="d-flex">
                <a href="{{ route('TerimaPesanan',['user_id' => $history->user_id, 'pesan_id' => $history->pesan_id]) }}" class="buttonbros text-decoration-none d-block w-50 rounded fw-bold ">Terima
                    Pesanan</a>

                <a href="{{ route('CartAdminDetail',['type' => 'pemesanan-pompa','user_id' => $history->user_id, 'pesan_id'  => $history->pesan_id]) }}"
                    class="ms-4 buttonbros text-decoration-none d-inline-block w-50 rounded fw-bold ">Lihat
                    Detail</a>
            </div>

        </div>
    </div>
    @endforeach
</div>