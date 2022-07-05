<!-- tentang menu paketan -->

<div class="detail-paketan d-flex align-items-center justify-content-between mb-5">

    <h3 class="text-primaries">Tentang Pompa Ini</h3>

    <a class="text-decoration-none buttonbro text-start d-block w-25 rounded fw-bold text-center" href="{{ route('Product') }}"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
</div>
<hr class="my-5">
<div class="products me-5 mb-5">
    <p class="number"><i class="fas fa-crown"></i></p>
    @if($getProduk->photo == 'default.jpg')
    <img id="img" src="{{ asset("assets/user_img/product.png") }}" alt="">
    @else
    <img id="img" src="{{ $getProduk->photo }}" alt="">
    @endif

    <h2 class="text-center mt-4 pt-4">{{ $getProduk->nama_produk }}</h2>
    <h4 class="text-center">Kondisi ( {{ $getProduk->kondisi }} )</h4>
    <h3 class="text-center">Rp. {{ number_format($getProduk->harga,2,',','.')}}</h3>
    <p class="text-center mt-4">{{ count($getDetail) }} Spesifikasi Tersedia</p>
    <a href="{{ route('ProductDetail',['type' => 'status-paket','product_id' => $getProduk->produk_id]) }}" class="buttonbro text-decoration-none text-start d-block w-75 mt-4 rounded fw-bold text-center m-auto">Periksa Status Pompa &nbsp;<i class="fas fa-clipboard-check"></i></a>

</div>

<!-- Akhir tentang menu paketan -->