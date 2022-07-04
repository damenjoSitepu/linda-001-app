<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthPages extends Controller
{
    // Halaman Beranda
    public function index()
    {
        // Data
        $data = [
            'title'     => 'Beranda',
            'opt'       => 'Beranda'
        ];

        return view("home/index", $data);
    }

    // Halaman Auth Login
    public function auth()
    {
        // Data
        $data = [
            'title'     => 'Authentikasi'
        ];

        return view("auth/index", $data);
    }

    // Halaman Auth Registrasi
    public function registrasi()
    {
        // Data
        $data = [
            'title'     => 'Registrasi'
        ];

        return view("auth/registrasi", $data);
    }
}
