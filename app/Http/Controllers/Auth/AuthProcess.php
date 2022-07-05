<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthProcess extends Controller
{
    public $User;
    public $Pesan;

    public function __construct()
    {
        $this->User  = new \App\Models\UserModel();
        $this->Pesan = new \App\Models\PesanModel();
    }

    // Proses login akun
    public function inakun(Request $request)
    {
        // Store 
        $username   = $request->username;
        $password   = $request->password;

        // Validation
        $validated = $request->validate([
            'username'      => 'required',
            'password'      => 'required'
        ]);

        // Check Username
        $getUserdata = $this->User->getUser($username, 'username');

        if (empty($getUserdata)) {
            // Set Flashdata
            return redirect()->route('Auth')->with('message', 'Username Tidak Ditemukan');
        } else {
            // Check Password 
            if ($getUserdata->password != $password) {
                // Set Flashdata
                return redirect()->route('Auth')->with('message', 'Password Anda Salah');
            } else {
                // Cek apakah user nonaktif atau tidak!
                if ($getUserdata->class == 3)
                    return redirect()->route('Auth')->with('message', 'Akun Anda Bernama ' . $getUserdata->nama . ' Telah Dinonaktifkan Oleh Admin!');


                // Simpan Session 
                $firstNameWord = strtok($getUserdata->nama, ' ');
                $sessionData = [
                    'user_id'       => $getUserdata->user_id,
                    'nama'          => $firstNameWord,
                    'class'         => $getUserdata->class
                ];
                session()->put('login', $sessionData);

                // Set Flashdata
                return redirect()->route('Home')->with('message', 'Selamat Datang Di Web Applikasi Kami');
            }
        }
    }

    // Proses Registrasi Akun Baru
    public function inregistrasi(Request $request)
    {
        // Store
        $nama       = $request->nama;
        $username   = $request->username;
        $email      = $request->email;
        $password   = $request->password;

        // Validation
        $validated = $request->validate([
            'nama'          => 'required',
            'username'      => 'required|unique:pengguna',
            'email'         => 'required',
            'password'      => 'required'
        ]);

        // Array
        $data = [
            'nama'           => $nama,
            'username'       => $username,
            'email'          => $email,
            'password'       => $password
        ];

        // Insert Data
        $this->User->insertUser($data);

        // Simpan Session 
        $getUserdata = $this->User->getUser($username, 'username');
        $firstNameWord = strtok($getUserdata->nama, ' ');

        // Insert Data Pesan Sebagai default
        $this->Pesan->insertPesan($getUserdata->user_id);

        $sessionData = [
            'user_id'       => $getUserdata->user_id,
            'nama'          => $firstNameWord,
            'class'         => $getUserdata->class
        ];
        session()->put('login', $sessionData);

        // Set Flashdata
        return redirect()->route('Home')->with('message', 'Berhasil Registrasi');
    }

    // Proses Keluar 
    public function outakun()
    {
        session()->forget('login');
        session()->flush();

        // Set Flashdata
        return redirect()->route('Home')->with('message', 'Anda Telah Keluar');
    }
}
