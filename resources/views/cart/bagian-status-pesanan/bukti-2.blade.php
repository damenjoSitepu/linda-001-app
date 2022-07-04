<div class="bukti">
    @if($getPesan->photo == 'document.png')
    <img style="width: 100%; height: 400px; border-radius: 0; object-fit:contain;" src="{{ asset("assets/document_img/document.png") }}" class="bukti-pembayaran mt-4 rounded" alt="">
    @else 
    <img style="width: 100%; height: 400px; border-radius: 0; object-fit:contain;" src="{{ $getPesan->photo }}" class="bukti-pembayaran mt-4 rounded" alt="">
    @endif
</div>

<a href="{{ route('KonfirmasiBukti',['user_id' => $user_id, 'pesan_id' => $pesan_id]) }}"
class="buttonbro text-decoration-none text-start d-block w-75 mt-5 rounded fw-bold text-center m-auto">Konfirmasi Bukti Pembayaran
&nbsp;<i class="fas fa-clock"></i></a>