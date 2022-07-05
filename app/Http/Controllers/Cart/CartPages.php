<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartPages extends Controller
{
    public $Pesan, $User;

    public function __construct()
    {
        $this->Pesan = new \App\Models\PesanModel();
        $this->User = new \App\Models\UserModel();
    }

    // Halaman Cart
    public function index($type = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'         => 'Pemesanan',
            'opt'           => 'Cart',
            'type'          => $type ? $type : '',
            'getCart'       => $this->Pesan->getDetailPesan(session()->get('login')['user_id'])
        ];

        return view("cart.index", $data);
    }

    // Halaman History
    public function history(Request $request)
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'                 => 'Sejarah Pemesanan',
            'opt'                   => 'History',
            'search'                => $request ? $request->search : '',
            'cartHistory1'          => $this->Pesan->getCartHistory(1),
            'cartHistory2'          => $this->Pesan->getCartHistory(2),
            'cartHistory3'          => $this->Pesan->getCartHistory(3),
            'cartHistory4'          => $this->Pesan->getCartHistory(4),
            'getUser'               => $this->User->getUser(session()->get('login')['user_id'])
        ];

        return view("History/index", $data);
    }

    // Halaman Upload Bukti
    public function uploadBukti($user_id = '', $pesan_id = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'                 => 'Upload Bukti Pembayaran',
            'opt'                   => 'History',
            'getPesan'              => $this->Pesan->getPesanById($pesan_id),
            'user_id'               => $user_id,
            'pesan_id'              => $pesan_id
        ];

        return view("Cart/upload-pembayaran", $data);
    }

    // Halaman Detail History
    public function historydetail($type = '', $pesan_id = '', $search = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'                 => 'Detail History Pemesanan',
            'opt'                   => 'History',
            'search'                => $search,
            'type'                  => $type ? $type : '',
            'getPesan'              => $this->Pesan->getPesanById($pesan_id),
            'getPompa'            => $this->Pesan->getCheckedDetailpesan(session()->get('login')['user_id'], $pesan_id)
        ];

        return view("History-Detail/index", $data);
    }

    // Halaman Management Cart
    public function management(Request $request)
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'         => 'Management Pesanan',
            'opt'           => 'Pesanan',
            'search'        => $request ? $request->search : '',
            'cartHistory1'  => $this->Pesan->getAdminCartHistory(1),
            'cartHistory2'  => $this->Pesan->getAdminCartHistory(2),
            'cartHistory3'  => $this->Pesan->getAdminCartHistory(3),
            'cartHistory4'  => $this->Pesan->getAdminCartHistory(4),
        ];

        return view("cart/admin", $data);
    }

    // Halaman Detail Management Pemesanan
    public function detail($type = '', $user_id = '', $pesan_id = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Data
        $data = [
            'title'         => 'Detail Management Pemesanan',
            'opt'           => 'Pesanan',
            'type'          => $type ? $type : '',
            'getPesanDetail'      => $this->Pesan->getCheckedDetailpesan($user_id, $pesan_id),
            'pesan_id'      => $pesan_id,
            'user_id'       => $user_id,
            'getUser'       => $this->User->getUser($user_id),
            'getPesan'      => $this->Pesan->getPesanById($pesan_id)
        ];

        return view("cart/admin-detail", $data);
    }
}
