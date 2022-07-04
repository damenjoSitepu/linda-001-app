<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('assets/css/admin/index.css'); ?>">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blaka&family=Mitr:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    {{-- Session Message --}}
    @if (Session::has('message'))
        <!-- The Modal -->
    <div id="myModals" class="modals">
        <div class="modal-contents rounded shadow-lg">
            <span class="close"><i class="fas fa-circle-exclamation"></i></span>
            <div class="modal-contentss mt-5">
                <div class="circle"></div>
                <p class="text-center fw-bold d-block mt-5">{{ Session::get('message') }}</p>
            </div>
        </div>
    </div>
    @endif
    {{-- End Session Message --}}
    
    <!-- Message Error -->
    @if($errors->any())
    <!-- The Modal -->
    <div id="myModals" class="modals">
        <div class="modal-contents rounded shadow-lg">
            <span class="close"><i class="fas fa-circle-exclamation"></i></span>
            <div class="modal-contentss mt-5">
                <div class="circle"></div>
                <p class="text-center fw-bold d-block mt-5">Form Input Belum Lengkap Atau Data Kolom Tertentu Telah Ada Di Database!</p>
            </div>
        </div>
    </div>
    @endif


    <!-- Menu Bar -->
    @include('component.menu-bar')
    <!-- End Menu Bar -->
  
    @yield('contents')

    <!-- Bottom Source -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fbc67db110.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/logic.js') }}"></script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModals");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>