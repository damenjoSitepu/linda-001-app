<!-- Pemesaanan paketan -->

<div class="halaman-cart">
    <h3 class="text-primaries mb-3">Daftar Pemesanan Pompa Air</h3>
    <hr>

    <div class="d-flex justify-content-between align-items-center mb-5">
        <h4 class="text-primaries"><i class="fas fa-user"></i> Terhadap User: {{ $getUser->nama }} ( ID: {{ $getUser->user_id }} )
        </h4>
        <small class="text-danger fw-bold mb-5 d-block"><i class="fas fa-key"></i> No. Pesan:
            {{ substr(hash('ripemd160',$getPesan->pesan_id),0,15) }}</small>
    </div>

    <div class="list">
       
        @foreach($getPesanDetail as $pesan)
        <div class="mb-5 lists d-flex align-items-center justify-content-between">
            @if($pesan->produkphoto == 'default.jpg')
            <img class="images me-4 rounded" src="{{ asset("assets/user_img/product.png") }}" alt="">
            @else 
            <img class="images me-4 rounded" src="{{ asset("storage/$pesan->produkphoto") }}" alt="">
            @endif
     
            <div class="loc1 me-4">
                <h4 class="">{{ $pesan->nama_produk }}</h4>
                <hr>
                <p class="fw-bold">Rp. {{ number_format($pesan->harga,2,',','.') }} X <span class="text-success fw-bold">{{ $pesan->qty }} Buah</span>
                </p>
            </div>


            <div class="choose">
                <button class="buttonbros text-decoration-none d-block w-100 rounded fw-bold ">Rp.
                    {{ number_format($pesan->harga * $pesan->qty,2,',','.') }}</button>
            </div>
        </div>
        @endforeach

    </div>
</div> 

            <!-- akhir pemesanan paketan -->