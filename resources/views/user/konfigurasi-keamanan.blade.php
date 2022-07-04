 <!-- Konfigurasi keamanan -->
 <h2 class="text-primaries mb-5">Konfigurasi Keamanan</h2>
          

 <form action="{{ route('suntingKeamanan') }}" method="POST">
    @csrf
     <div class="input-form w-75 mb-5">
         <label class="fw-bold d-block mb-3" for=""><i class="fas fa-unlock-keyhole"></i>
             Kata Sandi Lama</label>
         <input type="password" name="old_password" class="px-2 w-100">
     </div>

     <div class="d-flex">
         <div class="input-form w-50 mb-3 me-5">
             <label class="fw-bold d-block mb-3" for=""><i class="fas fa-key"></i>
                 Kata Sandi Baru</label>
             <input type="password" name="password" class="px-2 w-100">
         </div>

         <div class="input-form w-50 mb-3 ">
             <label class="fw-bold d-block mb-3" for=""><i class="fas fa-key"></i>
                 Ulangi Kata Sandi Baru</label>
             <input type="password" name="password_confirmation" class="px-2 w-100">
         </div>
     </div>

     <small class="notification my-4 bg-light rounded py-3 d-block d-flex align-items-center"><i
             class="fas fa-bell"></i><span><span class="fw-bold">Konfigurasi Keamanan</span>
             digunakan untuk merubah kata sandi anda agar menjadi lebih kuat.</small>

     <button type="submit" class="buttonbro d-block w-50 rounded fw-bold ">Ubah Kata Sandi</button>
 </form>


 <!-- akhir konfigurasi keamanan -->