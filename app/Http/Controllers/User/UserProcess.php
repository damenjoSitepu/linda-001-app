<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProcess extends Controller
{
    public $User;

    public function __construct()
    {
        $this->User = new \App\Models\UserModel();
    }

    // Nonaktifkan user
    public function nonaktifkan($user_id = '')
    {
        // Hapus
        $getStatus = $this->User->statusUser($user_id);

        // Set Flashdata
        return redirect()->route('UserAdmin')->with('message', $getStatus ? 'Status User Ini Dinonaktifkan!' : 'Status User Ini Diaktifkan!');
    }

    // Proses Sunting info utama
    public function suntingInfoUtama(Request $request)
    {
        // Store Photonya
        if ($request->file('photo')) {
            $data = $request->file('photo')->store('users_img');
            $this->User->updatePhoto(session()->get('login')['user_id'], $data, 'user');
        }

        // Set Flashdata
        return redirect()->route('User')->with('message', 'Foto Anda Berhasil Diubah');
    }

    // Proses Sunting info kedua
    public function suntingInfoUtamaKedua(Request $request)
    {
        // Store 
        $nama       = $request->nama;
        $username   = $request->username;
        $sdsd = $request->username;

        // Rules Unique username
        $getUserdata = $this->User->getUser($username, 'username');
        if (!empty($getUserdata))
            $rules = $getUserdata->username == $username ? 'required' : 'required|unique:user';
        else
            $rules =  'required';

        // Validation
        $validated = $request->validate([
            'nama'          => 'required',
            'username'      => $rules
        ]);

        // Array
        $data = [
            'nama'           => $nama,
            'username'       => $username,
        ];

        // Ubah data user
        $this->User->updateInformasiUtama(session()->get('login')['user_id'], $data, 'user');

        // Set Flashdata
        return redirect()->route('User')->with('message', 'Informasi Nama Atau Nama Pengguna Berhasil Diperbarui!');
    }

    // Proses Sunting Data Umum
    public function suntingDataUmum(Request $request)
    {
        // Store 
        $jenis_kelamin          = $request->jenis_kelamin;
        $no_telepon             = $request->no_telepon;
        $alamat                 = $request->alamat;
        $email                  = $request->email;

        // Validation
        $validated = $request->validate([
            'no_telepon'            => 'required',
            'email'                 => 'required',
        ]);

        // Array
        $data = [
            'jenis_kelamin'             => $jenis_kelamin,
            'no_telepon'                => $no_telepon,
            'alamat'                    => $alamat,
            'email'                     => $email,
        ];

        // Ubah data user
        $this->User->updateDataUmum(session()->get('login')['user_id'], $data, 'user');

        // Set Flashdata
        return redirect()->route('UserInfo', ['type' => 'data-umum'])->with('message', 'Informasi Data Umum Pengguna Berhasil Diperbarui!');
    }

    // Proses sunting keamanan password
    public function suntingKeamanan(Request $request)
    {
        // Store 
        $old_password                           = $request->old_password;
        $password                               = $request->password;
        $password_confirmation                  = $request->password_confirmation;

        // Get Database
        $getUserdata = $this->User->getUser(session()->get('login')['user_id']);

        // Cek apakah password lama sama dengan password baru lama
        if ($getUserdata->password != $old_password)
            return redirect()->route('UserInfo', ['type' => 'konfigurasi-keamanan'])->with('message', 'Password Lama Tidak Benar!');

        // Cek apakah password baru dengan password konfirmasinya sama atau tidak
        if ($password != $password_confirmation)
            return redirect()->route('UserInfo', ['type' => 'konfigurasi-keamanan'])->with('message', 'Password Konfirmasi Tidaklah Benar!');

        // Validation
        $validated = $request->validate([
            'password'                              => 'required',
            'old_password'                          => 'required',
            'password_confirmation'                 => 'required',
        ]);

        // Array
        $data = [
            'password'  => $password
        ];

        // Ubah data user
        $this->User->updatePassword(session()->get('login')['user_id'], $data, 'user');

        // Set Flashdata
        return redirect()->route('UserInfo', ['type' => 'konfigurasi-keamanan'])->with('message', 'Password Berhasil Diperbarui!');
    }
}
