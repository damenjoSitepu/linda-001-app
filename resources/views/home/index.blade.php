@extends('component.main')
 
@section('contents')
    <!-- Halaman beranda User -->

    <div class="halaman-beranda">
        <div class="first-section d-flex">
            <img src="<?= asset('assets/img/home.jpg'); ?>" alt="">
            <h1 class="text-light text-center m-auto d-block">Selamat Datang Di Website Kami</h1>
            <svg class="display" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,64L34.3,64C68.6,64,137,64,206,85.3C274.3,107,343,149,411,149.3C480,149,549,107,617,112C685.7,117,754,171,823,192C891.4,213,960,203,1029,170.7C1097.1,139,1166,85,1234,101.3C1302.9,117,1371,203,1406,245.3L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </div>

        <div class="second-section my-5">
            <div class="content w-25 m-auto text-center rounded p-3">
                <h2 class="text-primaries">LIRIS</h2>
                <h3>Pemesanan Pompa Air</h3>
                <h1 class="text-primaries">—</h1>
            </div>
        </div>

        <div class="third-section text-center">
            <h2 class="text-primaries">Kontak Kami</h2>

            <div class="container lists mt-5 d-flex justify-content-between mb-5">
                <div class="list rounded w-25">
                    <i class="fs-1 fab fa-whatsapp"></i>
                    <h5>081 - 387000960</h5>
                </div>

                <div class="list rounded w-25">
                    <i class="fs-1 fas fa-phone"></i>
                    <h5>082237310137</h5>
                </div>

                <div class="list rounded w-25">
                    <i class="fs-1 fab fa-instagram"></i>
                    <h5>lindong_28</h5>
                </div>
            </div>
        </div>

        <div class="fourth-section ">
            <img src="<?= asset('assets/img/address.png'); ?>" alt="">
            <div class="container">
                <div class="content w-50">
                    <h2>Kami Berada Di:</h2>
                    <h4>Jakarta Barat</h4>
                    <h2>Alamat Lain:</h2>
                    <h4>Jl. Kamal Raya Ruko Mutiara Taman Palem Blok A17 No. 18 Cengkareng, Jakarta Barat</h4>
                </div>
            </div>
        </div>

        <hr class="border-bottom border-secondary">

        <small class="text-secondary d-block my-5 text-center">Web App Made By Linda &copy; {{ date('Y') }}</small>
    </div>

    <!-- Akhir Halaman beranda User -->
@endsection

   

    