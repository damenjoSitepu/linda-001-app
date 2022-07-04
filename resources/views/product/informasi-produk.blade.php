<!-- sunting produk -->

<h2 class="text-primaries mb-3">Informasi Pompa Air - Sunting - ID: {{ $getProduk->produk_id }}</h2>
<hr class="my-5">

<form action="{{ route('suntingProduk',['produk_id' => $getProduk->produk_id]) }}" method="POST">
    @csrf
    <div class="d-flex">
        <div class="input-form w-50 mb-3 ">
            <label class="fw-bold d-block mb-3" for=""><i class="fas fa-box"></i>
                Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ old('nama_produk')? old('nama_produk') : $getProduk->nama_produk }}" class="px-2 w-100">
        </div>

        <div class="input-form w-50 mb-3 ms-5">
            <label class="fw-bold d-block mb-3" for=""><i class="fas fa-list"></i>
                Tipe Paket</label>

            <select type="text" name="kondisi" class="px-2 w-100">
                @if($getProduk->kondisi == '1')
                <option selected="selected" value="1">Baru</option>
                <option value="2">Tidak Baru</option>
                @elseif($getProduk->kondisi == '2')
                <option value="1">Baru</option>
                <option selected="selected" value="2">Tidak Baru</option>
                @else 
                <option value="1">Baru</option>
                <option value="2">Tidak Baru</option>
                @endif
            </select>
        </div>
    </div>

    <div class="input-form w-50 mb-3 mt-5">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-money-bill"></i>
            Harga</label>
        <input type="text" name="harga" value="{{ old('harga')? old('harga') : $getProduk->harga }}" class="px-2 w-100">
    </div>

    <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-bell"></i><span>Jika mengklik <span class="fw-bold">Sunting Data
                Umum</span>, maka anda setuju untuk menyunting profil anda dengan informasi yang
            telah dimasukkan.</span></small>

    <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Sunting Informasi Umum Pompa</button>
</form>

<!-- akhir sunting produk -->