@extends('component.main')

@section('contents')
<!-- Halaman user admin -->
<div class="container mt-4">


    <div class="halaman-user">
        <div class="profil-right w-100 ps-5 mb-5">
            <div class="profil-right">


                <!-- daftar menu paketan -->
                <h2 class="text-primaries text-center mb-5">Daftar User</h2>

                <div class="paket-list">
                    @foreach($getUser as $user)
                    <div class="paket-lists d-flex align-items-center pe-4 mb-5">
                        <h2 class="text-primaries">{{ $loop->iteration }}</h2>
                        @if($user->photo === 'default.jpg')
                        <img class="rounded" src="{{ asset("assets/img/user.png") }}" alt="">
                        @else 
                        <img class="rounded" src="{{ $user->photo }}" alt="">
                        @endif

                        <div class="text-start ps-5">
                            <h4>{{ $user->nama }}</h4>
                            <p class="text-primaries fw-bold"><i class="fas fa-user-lock"></i> Username: {{ $user->username }}
                            </p>
                        </div>
                        <a href="{{ route('UserAdminDetail',['user_id' => $user->user_id]) }}" class="buttonbro text-decoration-none d-block w-50 rounded fw-bold ">
                        @if ($user->class == 2)
                        Nonaktifkan
                        @else 
                            Aktifkan
                        @endif
                        </a>
                    </div>
                    @endforeach
                </div>

                <!-- akhir daftar menu paketan -->

                <!-- daftar nasi box -->

                <!-- akhir admin user -->

            </div>


        </div>
    </div>


</div>
<!-- akhir halaman produk admin -->

@endSection