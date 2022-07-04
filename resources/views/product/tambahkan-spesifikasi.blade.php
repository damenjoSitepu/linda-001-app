<!-- sunting produk -->
<h2 class="text-primaries mb-3"><i class="fas fa-list text-danger"></i> Tambahkan Spesifikasi -  {{ $getProduk->nama_produk }}</h2>
<hr class="my-5">

<form action="{{ route('suntingSpesifikasi',['produk_id' => $getProduk->produk_id]) }}" method="POST">
    @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="input-form w-100 mb-3 ">
                    <label class="fw-bold d-block mb-3" for=""><i class="fas fa-cog"></i>
                        Spesifikasi</label>
                    <input type="text" name="spesifikasi" value="{{ old('spesifikasi') }}" class="px-2 w-100">
                </div>

                <div class="input-form w-100 mb-3 mt-5">
                    <label class="fw-bold d-block mb-3" for=""><i class="fas fa-cogs"></i>
                        Nilai</label>
                    <input type="text" name="value" value="{{ old('value') }}" class="px-2 w-100">
                </div>
            </div>

            <div class="col-lg-8">
                <div style="max-height: 200px; overflow: auto;" class="listmenu d-flex flex-wrap justify-content-between">
                    @foreach($getDetail as $detail)
                    <div style="width: 49%;" class="lists bg-danger text-light rounded d-flex align-items-center mb-3">
                        <h4 class="w-25 text-center">{{ $loop->iteration }}</h4>
                        <div class="w-75 py-2">
                    
                            <small class="d-block fw-bold">{{ $detail->spesifikasi }}</small>
                       
                            <h6>{{ $detail->value }}</h6>
                       
                            
                            <div class="d-flex justify-content-between mt-2">
                                
                            <a href="{{ route('DeleteSpesifikasiAdminDetail',['product_id' => $getProduk->produk_id, 'spesifikasi' => $detail->spesifikasi]) }}" class="text-decoration-none text-light pe-5"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-bell"></i><span>Ini adalah menu dan fitur <span class="fw-bold">Menambahkan Spesifikasi Pompa</span>. Mohon bijak dalam menggunakan fitur ini.</span></small>

    <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Tambahkan Spesifikasi</button>
</form>
<!-- akhir sunting produk -->