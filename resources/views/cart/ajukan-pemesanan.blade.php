<!-- Ajukan pemesanan -->

<form action="{{ route('AjukanPemesanan') }}" method="POST" class="halaman-cart">
    @csrf
    <h3 class="text-primaries mb-5">Ajukan Pemesanan Kepada Admin</h3>

    <p class="d-flex align-items-center">
        <i class="fas fa-bell d-block w-25 fs-1 text-center text-primaries"></i>
        <span class="w-75 fw-bold text-dark d-inline-block">Perhatian, saat ini produk pompa yang hendak anda
            pilih telah tersedia.
            Silakan langsung lakukan
            <span class="text-primaries">pemesanan</span> jika anda telah yakin ingin membeli pompa
            ini.</span>
    </p>

    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-shop"></i>
            Total Tagihan Pompa Air Anda</label>
            @php
            $totalPesan = 0;
                foreach($getCart as $pesan)
                    $totalPesan += $pesan->qty * $pesan->harga;
                 
            @endphp
        <input type="hidden" name="total_auth" value="{{ $totalPesan }}">
        <input disabled="disabled" readonly="readonly" value="Rp. {{ number_format(($totalPesan),2,',','.') }} ( {{ count($getCart) }} Jenis Pompa )" class="px-2 w-100 fw-bold">
    </div>

    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-envelope"></i>
            Email</label>
        <input type="text" name="email" value="{{ old('email') }}" class="px-2 w-100">
    </div>

    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-phone"></i>
            No. Telepon</label>
        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" class="px-2 w-100">
    </div>

    <small
        class="w-75 m-auto notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-circle-exclamation"></i><span>Kami meminta data ini untuk menghubungi anda
            bila transaksi
            pemesanan ini <span class="text-primaries fw-bold">berhasil
                diselesaikan</span>.</span></small>

    <button type="submit"
        class="buttonbro text-decoration-none text-start d-block w-75 mt-5 rounded fw-bold text-center m-auto">Ajukan
        Pemesanan Sekarang &nbsp;<i class="fas fa-plane-departure"></i></button>
</form>

<!-- Akhir ajukan pemesanan  -->