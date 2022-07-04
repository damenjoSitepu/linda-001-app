 <!-- INformasi umum -->

               <h2 class="text-primaries mb-5">Ubah Foto User ID: 1</h2>

                <form action="">
                    <img  class="m-auto d-block" src="{{ asset('assets/img/user.png') }}" alt="">

                    <div class="inputs w-25 m-auto my-4">
                        <label for="editprofil">Pilih Foto Anda</label>
                        <input type="file" name="photo" id="editprofil">
                    </div>

                    <button class="buttonbro text-center d-block w-50 rounded fw-bold m-auto">Sunting Foto
                        Anda</button>
                </form>

                <hr class="my-5">

                <form action="">
                    <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
                            class="fas fa-bell"></i><span>Jika mengklik <span class="fw-bold">Perbarui Informasi
                                Utama</span>, maka anda sebagai <span class="fw-bold">Admin</span> setuju untuk
                            menyunting profil anda dengan
                            informasi yang
                            telah dimasukkan.</span></small>

                    <button class="buttonbro d-block w-50 rounded fw-bold ">Perbarui Informasi
                        Utama ( Sebagai Admin )</button>
                </form> 

                <!-- Akhir informasi umum -->