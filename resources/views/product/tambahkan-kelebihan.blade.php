<!-- sunting produk -->
<h2 class="text-primaries mb-3"><i class="fas fa-plus-circle text-danger"></i> Tambahkan Kelebihan Pompa -  {{ $getProduk->nama_produk }}</h2>
<hr class="my-5">

<form action="{{ route('suntingKelebihan',['produk_id' => $getProduk->produk_id]) }}" method="POST">
    @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="input-form w-100 mb-3 ">
                    <label class="fw-bold d-block mb-3" for=""><i class="fas fa-smile"></i>
                        Kelebihan</label>
                    <input type="text" name="kelebihan" value="{{ old('kelebihan') }}" class="px-2 w-100">
                </div>
            </div>

            <div class="col-lg-8">
                <div style="max-height: 200px; overflow: auto;" class="listmenu d-flex flex-wrap justify-content-between">
                    @foreach($getDetails as $detail)
                    <div style="width: 100%;" class="d-flex align-items-center lists bg-danger text-light rounded mb-3">
                        <h4 class="w-25 text-center">{{ $loop->iteration }}</h4>
                        <div class="w-75 py-2">
                    
                            <small class="d-block fw-bold">{{ $detail->kelebihan }}</small>
                       
                            <div class="d-flex justify-content-between mt-2">
                                
                            <a href="{{ route('DeleteKelebihanAdminDetail',['product_id' => $getProduk->produk_id, 'kelebihan' => $detail->produk_details_id]) }}" class="text-decoration-none text-light pe-5"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
            class="fas fa-bell"></i><span>Ini adalah menu dan fitur <span class="fw-bold">Menambahkan Kelebihan Pompa</span>. Mohon bijak dalam menggunakan fitur ini.</span></small>

    <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Tambahkan Kelebihan Pompa</button>
</form>
<!-- akhir sunting produk -->