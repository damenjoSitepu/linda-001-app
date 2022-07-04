<!-- pemesanan nasi box -->

<div class="halaman-cart">
<h3 class="text-primaries mb-5">Pemesanan Nasi Box</h3>

<div class="list">
    @foreach($getNasiBox as $box)
    <div class="mb-5 lists d-flex align-items-center justify-content-between">
        @if($box->photo == 'default.jpg')
        <img class="images me-4 rounded" src="{{ asset("assets/user_img/default.jpg") }}" alt="">
        @else 
        <img class="images me-4 rounded" src="{{ asset("storage/$box->photo") }}" alt="">
        @endif
        <div class="loc1 me-4">
            <h4 class="">{{ $box->nama_produk}}</h4>
            <hr>
            <p class="fw-bold">Rp. {{number_format($box->harga,2,',','.')}} X <span class="text-success fw-bold stok">{{ $box->qty}}</span> Buah
            </p>
            <h4 class="text-danger text-decoration-underline total">Rp. {{ number_format($box->harga * $box->qty,2,',','.') }}</h4>
        </div>

        <div class="choose">
     

            <a href=""
                data-route="{{ route('ManipulasiStok') }}" data-routeback="{{ route('CartInfo',['type' => 'pemesanan-nasi-box']) }}" data-product="<?= $box->produk_id; ?>" data-status="1" class="manipulasi fas fa-plus d-inline-block  me-4 text-decoration-none rounded-circle bg-primary text-light text-center mb-3"></a>
            <a href=""
                data-route="{{ route('ManipulasiStok') }}" data-routeback="{{ route('CartInfo',['type' => 'pemesanan-nasi-box']) }}" data-product="<?= $box->produk_id; ?>" data-status="0" class="manipulasi fas fa-minus d-inline-block text-decoration-none rounded-circle bg-primary text-light text-center"></a>
        </div>
    </div>
    @endforeach
</div>
</div>

            <!-- akhir pemesanan nasi box -->