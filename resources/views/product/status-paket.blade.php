<!-- Status paket -->

<form action="{{ route('TambahkanKeranjang', ['produk_id' => $getProduk->produk_id]) }}" method="POST">
    @csrf
    <div class="detail-paketan d-flex align-items-center justify-content-between mb-5">
        <h3 class="text-primaries">Status Pompa Ini</h3>
    
        <a class="text-decoration-none buttonbro text-start d-block w-25 rounded fw-bold text-center"
            href="{{ route('Product') }}"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
    </div>
    <hr class="my-5">
    
    <p class="d-flex align-items-center">
        <i class="fas fa-bell d-block w-25 fs-1 text-center text-primaries"></i>
        <span class="w-75 fw-bold text-dark d-inline-block">Perhatian, saat ini jenis pompa yang hendak anda
            pilih telah tersedia.
            Silakan langsung lakukan
            <span class="text-primaries">pemesanan</span> jika anda telah yakin ingin membeli produk pompa
            ini.</span>
    </p>
    
    <div class="input-form w-50 mt-5 mb-5 ms-5">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-faucet-drip"></i>
            Masukkan Jumlah Pompa Yang Ingin Dibeli</label>
        <input type="text" name="qty" value="{{ old('qty') }}" class="px-2 w-100">
    </div>
    
    <button type="submit"
        class="buttonbro text-decoration-none text-start d-block w-75 mt-5 rounded fw-bold text-center m-auto">Tambahkan Ke Keranjang Pemesanan <i class="fas fa-cart-arrow-down"></i></button>
</form>

<!-- Akhir status paket -->