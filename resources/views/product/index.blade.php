@extends('component.main')

@section('contents')
<!-- Halaman Product User -->
 <div class="container mt-4">

    <div class="halaman-product">
        <h2 class="text-primaries text-center">Daftar Pompa</h2>

        <div class="product d-flex flex-wrap mt-5">
            @foreach($getProduk as $produk)
            <div class="products me-5 mb-5">
                <p class="number">{{ $loop->iteration }}</p>
                @if ($produk->photo == 'default.jpg')
                <img src="{{ asset("assets/user_img/product.png") }}" alt="">
                @else 
                <img src="{{ asset ("storage/{$produk->photo}") }}" alt="">
                @endif
         

                <h4 class="text-center mt-4">{{ $produk->nama_produk }}</h4>
                <h4 class="text-center">Kondisi ( {{ $produk->kondisi }} )</h4>
                <h3 class="text-center">Rp. {{ number_format($produk->harga,2,',','.') }}</h3>
                      

                <a href="{{ route('ProductDetail',['type' => 'tentang-menu-paketan','product_id' => $produk->produk_id]) }}"
                    class="buttonbro text-decoration-none text-start d-block w-75 mt-4 rounded fw-bold text-center m-auto">Pilih Pompa <i class="fas fa-hand"></i></a>
            </div>
            @endforeach
           
        </div>

        <hr class="my-4">
    </div>




</div>

<!-- Akhir Halaman Product User -->

@endsection