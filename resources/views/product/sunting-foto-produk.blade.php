<!-- manipulasi foto -->
<h3 class="text-decoration-underline text-primaries mb-5">Sunting Foto Produk: {{$getProduk->nama_produk}}</h3>

<form action="{{ route('suntingPhotoProduk',['produk_id' => $getProduk->produk_id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
        @if($getProduk->photo === 'default.jpg')
        <img class="imageb m-auto d-block img-preview" src="{{ asset('assets/user_img/product.png') }}" alt="">
        @else 
        <img class="imageb m-auto d-block img-preview" src="{{ asset("storage/{$getProduk->photo}") }}" alt="">
        @endif
    
    <div class="inputs w-25 m-auto my-4">
        <label for="editphotouser">Pilih Foto Produk Anda</label>
        <input type="file" name="photo" id="editphotouser" >
    </div>

    <button type="submit" class="buttonbro text-center d-block w-50 rounded fw-bold m-auto">Sunting Foto Produk
        Anda</button>
</form> 
<!-- akhir manipulasi foto -->