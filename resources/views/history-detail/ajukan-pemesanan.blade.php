<!-- Ajukan pemesanan -->

<form class="halaman-cart">
    <h3 class="text-primaries mb-5 d-flex align-items-center"><i class="text-danger fas fa-money-bill fs-2"></i>&nbsp; <span>Informasi Pembayaran</span> </h3>

    <p class="d-flex align-items-center">
        <i class="fas fa-triangle-exclamation d-block w-25 fs-1 text-center text-primaries"></i>
        <span class="w-75 fw-bold text-dark d-inline-block">Perhatian, anda tidak bisa menyunting pemesanan ini karena sudah dalam <span class="text-primaries text-decoration-underline">tahap transaksi</span>. Terima kasih.</span>
    </p>
    @php
    $totalPompa = 0;

    foreach($getPompa as $pompa)
        $totalPompa += $pompa->qty * $pompa->harga;

    @endphp
    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-shop"></i>
            Total Belanja Pompa Anda</label>
        <input type="text" disabled="disabled" readonly="readonly" value="Rp. {{ number_format(($totalPompa),2,',','.') }} ( {{ count($getPompa) }} Jenis Produk Pompa )" class="fw-bold px-2 w-100">
    </div>

    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-envelope"></i>
            Email</label>
        <input type="text" value="{{ $getPesan->email }}" disabled="disabled" readonly="readonly" class="fw-bold px-2 w-100">
    </div>

    <div class="input-form w-50 mt-5 mb-5 m-auto">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-phone"></i>
            No. Telepon</label>
        <input type="text"  value="{{ $getPesan->no_telepon }}" disabled="disabled" readonly="readonly" class="fw-bold px-2 w-100">
    </div>

    <small
        class="w-75 m-auto notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-circle-exclamation"></i><span>Pemesanan ini <span class="text-primaries fw-bold">berhasil
                diselesaikan</span>. Mohon untuk menunggu informasi lebih lanjut mengenai status pemesanan ini dari admin yang bersangkutan.</small>

</form>

<!-- Akhir ajukan pemesanan  -->