<!-- INformasi umum -->

          <h2 class="text-primaries mb-5">Informasi Utama</h2>
    
            <form action="{{ route('suntingInfoUtama') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if($getUser->photo == 'default.jpg')
                <img class="m-auto d-block img-preview" src="{{ asset('assets/img/user.png') }}" alt="">
                @else 
                <img class="m-auto d-block img-preview" src="{{ asset('storage/'. $getUser->photo) }}" alt="">
                @endif
               

                <div class="inputs w-25 m-auto my-4">
                    <label for="editphotouser">Pilih Foto Anda</label>
                    <input type="file" name="photo" id="editphotouser">
                </div>
            
                <button type="submit" class="buttonbro text-center d-block w-50 rounded fw-bold m-auto">Sunting Foto
                    Anda</button>
            </form>

            <hr class="my-5">

            <form action="{{ route('suntingInfoUtamaKedua') }}" method="POST">
                @csrf
                <div class="d-flex">
                    <div class="input-form w-50 mb-3 me-5">
                        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user"></i>
                            Nama Kamu</label>
                        <input type="text" name="nama" value="{{ old('nama') ? old('nama') : $getUser->nama }}" class="px-2 w-100">
                    </div>

                    <div class="input-form w-50 mb-3 ">
                        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user-lock"></i>
                            Nama Pengguna</label>
                        <input type="text" name="username" value="{{ old('username') ? old('username') : $getUser->username }}" class="px-2 w-100">
                    </div>
                </div>

                <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
                        class="fas fa-bell"></i><span>Jika mengklik <span class="fw-bold">Perbarui Informasi
                            Utama</span>, maka anda setuju untuk menyunting profil anda dengan informasi yang
                        telah dimasukkan.</span></small>

                <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Perbarui Informasi
                    Utama</button>
            </form> 
            
            <!-- Akhir informasi umum -->