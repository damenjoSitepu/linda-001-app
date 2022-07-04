  <!-- Sajian menu -->

<div class="detail-paketan d-flex align-items-center justify-content-between mb-5">
<h3 class="text-primaries">Spesifikasi Pompa</h3>

<a class="text-decoration-none buttonbro text-start d-block w-25 rounded fw-bold text-center"
    href="{{ route('Product') }}"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
</div>
<hr class="my-5">

<div class="my-item flex-wrap d-flex justify-content-between">
    @foreach($getDetail as $detail)
        <div class="item d-flex mb-5 me-4 align-items-center">
            <p class="fw-bold me-4 rounded-circle bg-primaries text-light text-center">#{{$loop->iteration}}</p>
            <div>
                <h6>{{ $detail->spesifikasi }}</h6>
            <small class="text-success fw-bold mb-2">{{ $detail->value }} </small>
            </div>
        </div>
    @endforeach
</div>

            <!-- Akhir sajian menu -->
