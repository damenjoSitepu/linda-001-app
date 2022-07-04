<p class="d-flex align-items-center">
    <i class="fas fa-circle-exclamation d-block w-25 fs-1 text-center text-primaries"></i>
    <span class="w-75 fw-bold text-dark d-inline-block">Transaksi Dengan No. Pesan <span class="fw-bold text-primaries">{{ substr(hash('ripemd160',$getPesan->pesan_id),0,15) }}</span> Atas Nama <span class="text-primaries">{{ $getUser->nama }}</span> Telah Selesai Dilakukan. Terima Kasih.</span>
</p>