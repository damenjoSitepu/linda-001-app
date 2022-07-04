@extends('component.main')

@section('contents')
 <!-- Halaman Profil User -->
 <div class="container mt-4 mb-5">


    <!-- Informasi Umum -->

    <div class="upload-pembayaran">
        <div class="text-center mb-5">
            <h3>Upload Bukti Pembayaran</h3>
            <h2 class="text-primaries">Transaksi: {{ substr(hash('ripemd160',$getPesan->pesan_id),0,15) }}</h2>
        </div>

        <div class="profil-right">
            <form action="{{ route('UpdatePembayaran',['user_id' => $user_id, 'pesan_id' => $pesan_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                

                @if($getPesan->photo == 'document.png')
                <img  class="m-auto d-block img-preview" src="{{ asset('assets/document_img/document.png') }}" alt="">
                @else 
                <img  class="m-auto d-block img-preview" src="{{ asset("storage/$getPesan->photo") }}" alt="">
                @endif

                <div class="inputs w-25 m-auto my-4">
                    <label for="editphotouser">Pilih Dokumen Anda</label>
                    <input type="file" name="photo" id="editphotouser">
                </div>

                <button type="submit" class="buttonbro text-center d-block w-50 rounded fw-bold m-auto">Sunting Bukti
                    Pembayaran</button>
            </form>
        </div>

        <hr class="my-4">

        <div class="d-flex justify-content-between mt-5">
            <div class="input-form w-50 mb-5 me-5">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-date"></i>
                    Tanggal Transaksi</label>
                <input type="string" disabled="disabled" readonly="readonly" value="{{ date('l, j-M-Y',strtotime($getPesan->dibuat)) }}" value="2020-11-21" class="px-2 w-100">
            </div>

            {{-- Count Total pemesanan --}}
            @php
                $total = 0;

                $getTotal = DB::select("SELECT * FROM pesan_detail INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan_id='{$getPesan->pesan_id}'");

                foreach($getTotal as $totals)
                    $total += $totals->harga * $totals->qty;
            @endphp

            <div class="input-form w-50 mb-5">
                <label class="fw-bold d-block mb-3" for=""><i class="fas fa-hand-holding-dollar"></i>
                    Total Pemesanan</label>
                <input type="text" disabled="disabled" readonly="readonly" value="Rp. {{ number_format($total,2,',','.') }}" class="px-2 w-100">
            </div>
        </div>



        <small
            class="w-75 fw-bold m-auto notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
                class="fas fa-bell"></i><span>Jika sudah mengupload bukti pembayaran sesuai kaidah yang telah
                ditetapkan. Mohon menunggu konfirmasi admin selanjutnya. Terima kasih karena sudah memercayakan
                pemesanan pompa air anda kepada kami, semoga hari anda menyenangkan :)</span></small>

        <a href="{{ route('History',['search' => 2]) }}" class="text-decoration-none buttonbro m-auto text-start d-block w-25 rounded fw-bold text-center"><i
                class="fas fa-shop"></i> Kembali Ke Toko</a>
    </div>

    <!-- Akhir informasi umum -->
</div>

@endSection