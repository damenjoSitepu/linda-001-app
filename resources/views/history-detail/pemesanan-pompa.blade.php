 <!-- Pemesaanan paketan -->

<div class="halaman-cart">
<h4 class="text-primaries mb-5"><span class="text-danger">History</span> Pemesanan Pompa:  {{ substr(hash('ripemd160',$getPesan->pesan_id),0,15) }}</h4>

<div class="list">

    @foreach($getPompa as $pompa)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
     
        @if($pompa->produkphoto == 'default.jpg')
        <img class="images me-4 rounded" src="{{ asset("assets/user_img/product.png") }}" alt="">
        @else 
        <img class="images me-4 rounded" src="{{ asset("storage/$pompa->produkphoto") }}" alt="">
        @endif

        <div class="loc1 me-4">
            <h4 class="">{{ $pompa->nama_produk }}</h4>
            <hr>
            <p class="fw-bold">Rp. {{ number_format($pompa->harga,2,',','.') }} X <span class="text-success fw-bold">{{ $pompa->qty }} Buah</span>
            </p>
        </div>

        <div class="choose">
            <a href="{{ route('ProductDetail',['type' => 'tentang-pompa', 'product_id' => $pompa->produk_id]) }}"
                class="d-inline-block  me-4 text-decoration-none rounded-pill fw-bold bg-primary text-light text-center mb-3 w-75 d-block">Info Produk</a>
     
        </div>
    </div>
    @endforeach
</div>
</div> 

            <!-- akhir pemesanan paketan -->