  <!-- daftar pompa air -->

  <h2 class="text-primaries mb-5">Daftar Pompa Air</h2>

  <div class="paket-list">
      @foreach($getProduk as $produk)
      <div class="paket-lists d-flex align-items-center pe-4 mb-5">
          <h2 class="text-primaries">{{ $loop->iteration }}</h2>
          @if($produk->photo === 'default.jpg')
          <img class="rounded" src="{{ asset("assets/user_img/product.png") }}" alt="">
          @else 
          <img class="rounded" src="{{ $produk->photo }}" alt="">
          @endif
        
          <div>
              <h6>{{ $produk->nama_produk }}</h6>
              <p class="text-primaries fw-bold">@ Rp. {{ number_format($produk->harga,2,',','.') }}</p>
          </div>
          <a href="{{ route('ProdukAdminDetail',['type' => 'informasi-produk','product_id' => $produk->produk_id]) }}" class="buttonbro text-decoration-none d-block w-50 rounded fw-bold ">Sunting</a>    
      </div>
      @endforeach
  </div> 

