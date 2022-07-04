<!-- buat produk -->

<h2 class="text-primaries mb-5">Buat Produk Pompa Air</h2>


<form action="{{ route('buatProduk') }}" method="POST">
    @csrf

    <div class="input-form w-50 mb-3 ">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-box"></i>
            Nama Produk</label>
        <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="px-2 w-100">
    </div>


    <div class="input-form w-50 mb-3 mt-5">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-money-bill"></i>
            Harga</label>
        <input type="text" name="harga" value="{{ old('harga') }}" class="px-2 w-100">
    </div>

    <div class="input-form w-50 mb-3 mt-5">
        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-list"></i>
            Kondisi</label>
        <select type="text" name="kondisi" class="px-2 w-100">
            @if(old('kondisi') == '1')
            <option selected="selected" value="1">Baru</option>
            <option value="2">Tidak Baru</option>
            @elseif(old('kondisi') == '2')
            <option value="1">Baru</option>
            <option selected="selected" value="2">Tidak Baru</option>
            @else 
            <option value="1">Baru</option>
            <option value="2">Tidak Baru</option>
            @endif
        </select>
    </div>

    <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-bell"></i><span>Jika mengklik <span class="fw-bold">Buat Produk</span>, maka anda setuju untuk membuat data produk pompa air baru yang telah anda masukkan.</span></small>

    <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Buat Produk</button>
</form>

<!-- akhir buat produk -->