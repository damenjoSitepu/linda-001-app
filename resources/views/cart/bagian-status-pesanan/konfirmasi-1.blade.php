<form action="{{ route('TerimaPesanan',['user_id' => $user_id, 'pesan_id' => $pesan_id]) }}" method="GET" class="halaman-cart">
<p class="d-flex align-items-center">
    <i class="fas fa-bell d-block w-25 fs-1 text-center text-primaries"></i>
    <span class="w-75 fw-bold text-dark d-inline-block">Perhatian. Saat ini anda akan melakukan
        perubahan status pada pemesanan <span class="fw-bold">Damenjo Sitepu ( 1 )</span> dengan
        varian pesanan yang sudah tercantum.</span>
</p>

<small
    class="w-75 m-auto notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
        class="fas fa-circle-exclamation"></i><span>Status ini tidak akan bisa diubah setelah anda
        menerima pesanan ini. Mohon bijak dalam memutuskan. </span></small>

<button
    class="buttonbro text-decoration-none text-start d-block w-50 mt-5 rounded fw-bold text-center m-auto">Terima
    Pesanan
    &nbsp;<i class="fas fa-check"></i></button>
</form>