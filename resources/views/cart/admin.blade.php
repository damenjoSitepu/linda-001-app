 @extends('component.main')

 @section('contents')
 <!-- Halaman user admin -->
 <div class="container mt-4">
    <div class="hal-pesan ps-4">
        @if($search == 1 || $search == '')
        <h3 class="text-primaries mb-4"><i class="fas fa-list"></i> Daftar Pesanan: Menunggu Konfirmasi Admin</h3>
        @elseif($search == 2)
        <h3 class="text-primaries mb-4"><i class="fas fa-list"></i> Daftar Pesanan: Telah Admin Konfirmasi</h3>
        @elseif($search == 3)
        <h3 class="text-primaries mb-4"><i class="fas fa-list"></i> Pemesanan Telah Selesai Dibayarkan</h3>
        @elseif($search == 4)
        <h3 class="text-primaries mb-4"><i class="fas fa-list"></i> Transaksi Berhasil Sepenuhnya</h3>
        @else 
        <h3 class="text-primaries mb-4"><i class="fas fa-list"></i> Menunggu Konfirmasi Admin</h3>
        @endif

        

        <!-- search -->
        <div class="halaman-history">
            <form action="{{ route('CartAdmin') }}" method="GET" class="search w-100 d-flex align-items-center">
                @csrf
                <select name="search" class="w-75 px-4" id="">
                    <option value="1">Menunggu Konfirmasi Admin</option>
                    <option value="2">Telah Admin Konfirmasi</option>
                    <option value="3">Pemesanan Selesai Pembeli Bayarkan</option>
                    <option value="4">Transaksi Telah Admin Verifikasi Dan Berhasil</option>
                </select>
                <button type="submit" class="w-25 buttonbro text-center d-block w-50 fw-bold" type="submit">Periksa
                    Data</button>
            </form>
        </div>

        <!-- akhir search -->
        <hr class="my-5">

        @if ($search == 1)
            @include ('cart.menunggu-konfirmasi-admin')
        @elseif ($search == 2)
            @include('cart.admin-telah-konfirmasi')
        @elseif ($search == 3)
            @include('cart.pemesanan-dibayarkan')
        @elseif($search == 4)
            @include('cart.transaksi-selesai')
        @else 
            @include('cart.menunggu-konfirmasi-admin')
        @endif


       
    </div>

</div>
<!-- akhir halaman produk admin -->

@endSection