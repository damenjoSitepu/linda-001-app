 <!-- daftar keranjang belanja -->

<div class="halaman-cart">
<h3 class="text-primaries mb-5">Daftar Keranjang Anda</h3>

<div class="list">
    @foreach($getCart as $cart)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
        @if($cart->photo == 'default.jpg')
        <img class="images me-4 rounded" src="{{ asset("assets/user_img/product.png") }}" alt="">
        @else 
        <img class="images me-4 rounded" src="{{ asset("storage/$cart->photo") }}" alt="">
        @endif
    
        
        <div class="loc1 me-4">
            <h4 class="">{{ $cart->nama_produk}}</h4>
            <hr>
            <p class="fw-bold">Rp. {{number_format($cart->harga,2,',','.')}} X <span class="text-success fw-bold stok">{{ $cart->qty}}</span> Buah
            </p>
            <h4 class="text-danger text-decoration-underline total">Rp. {{ number_format($cart->harga * $cart->qty,2,',','.') }}</h4>
        </div>

        <div class="choose">
            <a href=""
                class="manipulasi fas fa-plus d-inline-block  me-4 text-decoration-none rounded-circle bg-primary text-light text-center mb-3" data-route="{{ route('ManipulasiStok') }}" data-routeback="{{ route('Cart') }}" data-product="<?= $cart->produk_id; ?>" data-status="1"></a>
            <a href=""
                class="manipulasi fas fa-minus d-inline-block text-decoration-none rounded-circle bg-primary text-light text-center" data-route="{{ route('ManipulasiStok') }}" data-routeback="{{ route('Cart') }}" data-product="<?= $cart->produk_id; ?>" data-status="0"></a>
        </div>
    </div>
    @endforeach
</div>
</div> 

<!-- akhir daftar keranjang belanja -->