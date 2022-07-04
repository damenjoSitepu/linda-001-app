<!-- data umum -->

            <h2 class="text-primaries mb-5">Data Umum</h2>


            <form action="{{ route('suntingDataUmum') }}" method="POST">
                @csrf
                <div class="d-flex">
                    <div class="input-form w-50 mb-3 me-5">
                        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-address-card"></i>
                            Jenis Kelamin</label>
                        <select type="text" name="jenis_kelamin" class="px-2 w-100">
                            @if($getUser->jenis_kelamin == '1')
                            <option selected="selected" value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                            @else 
                            <option value="1">Laki-Laki</option>
                            <option selected="selected" value="2">Perempuan</option>
                            @endif
                            
                        </select>
                    </div>

                    <div class="input-form w-50 mb-3 ">
                        <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user-phone"></i>
                            No. Telepon</label>
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') ? old('no_telepon') : $getUser->no_telepon }}"  class="px-2 w-100">
                    </div>
                </div>

                <div class="input-form w-50 mb-4 mt-5">
                    <label class="fw-bold d-block mb-3" for=""><i class="fas fa-address-card"></i>
                        Alamat</label>
                    <textarea type="text" name="alamat" class="px-2 w-100">{{ old('alamat') ? old('alamat') : $getUser->alamat }}</textarea>
                </div>

                <div class="input-form w-75 mb-3 mt-5">
                    <label class="fw-bold d-block mb-3" for=""><i class="fas fa-user-envelope"></i>
                        Email</label>
                    <input type="text" name="email" value="{{ old('email') ? old('email') : $getUser->email }}" class="px-2 w-100">
                </div>

                <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
                        class="fas fa-bell"></i><span>Jika mengklik <span class="fw-bold">Perbarui Data
                            Umum</span>, maka anda setuju untuk menyunting profil anda dengan informasi yang
                        telah dimasukkan.</span></small>

                <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Perbarui Data Umum</button>
            </form> 

            <!-- Akhir data umum -->