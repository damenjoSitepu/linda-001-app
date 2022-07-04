@extends('component.main')

@section('contents')

 <!-- Halaman History User -->
 <div class="container mt-4">
    @if($search == 1 || $search == '')
    <h3 class="text-primaries text-center mb-5"><i class="fas fa-list"></i> Riwayat: Menunggu Konfirmasi Admin</h3>
    @elseif($search == 2)
    <h3 class="text-primaries text-center mb-5"><i class="fas fa-list"></i> Riwayat: Telah Selesai Menunggu Konfirmasi</h3>
    @elseif($search == 3)
    <h3 class="text-primaries text-center mb-5"><i class="fas fa-list"></i> Riwayat: Pemesanan Selesai Dibayarkan</h3>
    @elseif($search == 4)
    <h3 class="text-primaries text-center mb-5"><i class="fas fa-list"></i> Riwayat: Transaksi Telah Diverifikasi Dan Berhasil</h3>
    @else 
    <h3 class="text-primaries text-center mb-5"><i class="fas fa-list"></i> Riwayat: Menunggu Konfirmasi Admin</h3>
    @endif

    <div class="halaman-history">
        <!-- search -->
        <form action="{{ route('History') }}" method="GET" class="search w-100 d-flex align-items-center">
            @csrf
            <select name="search" class="w-75 px-4" id="">
                @if($search == '' || $search == 1)
                <option selected value="1">Menunggu Konfirmasi Admin</option>
                <option value="2">Telah Selesai Menunggu Konfirmasi</option>
                <option value="3">Pemesanan Selesai Dibayarkan</option>
                <option value="4">Transaksi Telah Diverifikasi Dan Berhasil</option>
                @elseif($search == 2)
                <option value="1">Menunggu Konfirmasi Admin</option>
                <option selected value="2">Telah Selesai Menunggu Konfirmasi</option>
                <option value="3">Pemesanan Selesai Dibayarkan</option>
                <option value="4">Transaksi Telah Diverifikasi Dan Berhasil</option>
                @elseif($search == 3)
                <option value="1">Menunggu Konfirmasi Admin</option>
                <option value="2">Telah Selesai Menunggu Konfirmasi</option>
                <option selected value="3">Pemesanan Selesai Dibayarkan</option>
                <option value="4">Transaksi Telah Diverifikasi Dan Berhasil</option>
                @elseif($search == 4)
                <option value="1">Menunggu Konfirmasi Admin</option>
                <option value="2">Telah Selesai Menunggu Konfirmasi</option>
                <option value="3">Pemesanan Selesai Dibayarkan</option>
                <option selected value="4">Transaksi Telah Diverifikasi Dan Berhasil</option>
                @else 
                <option selected value="1">Menunggu Konfirmasi Admin</option>
                <option value="2">Telah Selesai Menunggu Konfirmasi</option>
                <option value="3">Pemesanan Selesai Dibayarkan</option>
                <option value="4">Transaksi Telah Diverifikasi Dan Berhasil</option>
                @endif
               
            </select>
            <button type="submit" class="w-25 buttonbro text-center d-block w-50 fw-bold" type="submit">Periksa
                Data</button>
        </form>
        <!-- akhir search -->

        @if ($search == 1)
            @include ('history.menunggu-konfirmasi-admin')
        @elseif ($search == 2)
            @include('history.selesai-konfirmasi-admin-1')
        @elseif ($search == 3)
            @include('history.selesai-dibayarkan')
        @elseif($search == 4)
            @include('history.transaksi-berhasil')
        @else 
            @include('history.menunggu-konfirmasi-admin')
        @endif
        

    </div>


</div>
<!-- Akhir History User -->

@endsection