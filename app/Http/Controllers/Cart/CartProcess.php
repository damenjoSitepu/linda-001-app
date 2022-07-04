<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartProcess extends Controller
{
    public $Pesan;

    public function __construct()
    {
        $this->Pesan = new \App\Models\PesanModel();
    }

    // Proses terima pesanan
    public function terimaPesanan($user_id = '', $pesan_id = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Mengubah status pesanan menjadi 2 ( berhasil di konfirmasi )
        $this->Pesan->konfirmasiPesanan($user_id, $pesan_id);

        // Set Flashdata
        return redirect()->route('CartAdmin', ['search' => 2])->with('message', 'Admin Berhasil Mengkonfirmasi Pesanan Ini.');
    }

    // Proses konfirmasi bukti pembayaran oleh admin
    public function konfirmasiBukti($user_id = '', $pesan_id = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Mengubah status pesanan menjadi 2 ( berhasil di konfirmasi )
        $this->Pesan->konfirmasiBukti($user_id, $pesan_id);

        // Set Flashdata
        return redirect()->route('CartAdmin', ['search' => 4])->with('message', 'Admin Berhasil Mengkonfirmasi Bukti Pembayaran Yang Telah Terjadi Ini.');
    }

    // Upload Bukti Pembayaran
    public function updatePembayaran(Request $request, $user_id = '', $pesan_id = '')
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Store Photonya
        if ($request->file('photo')) {
            $data = $request->file('photo')->store('bukti_img');
            $this->Pesan->updatePhoto($user_id, $pesan_id, $data);
        }

        // Set Flashdata
        return redirect()->route('UploadBukti', ['user_id' => $user_id, 'pesan_id' => $pesan_id])->with('message', 'Bukti Pembayaran Berhasil Ditambahkan Atau Diperbarui!');
    }

    // Proses menambah atau mengurangi stok
    public function manipulasiPemesanan(Request $request)
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        $productID = $request->productID;
        $status = $request->status;
        // Tambahkan atau kurangi
        $this->Pesan->manipulateQuantity($status, $productID);

        $getPesanId = $this->Pesan->getRecentPesanId(session()->get('login')['user_id'])->pesan_id;
        // Dapatkan info terbaru stok add to cart item yang telah diupdate
        $updateStock = $this->Pesan->getStock($getPesanId, $productID);
        return json_encode($updateStock);
    }

    // Proses ajukan pemesanan
    public function ajukanPemesanan(Request $request)
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Store 
        $email             = $request->email;
        $no_telepon        = $request->no_telepon;
        $pesan_id          = $this->Pesan->getRecentPesanId(session()->get('login')['user_id']);

        // Validation
        $validated = $request->validate([
            'email'                 => 'required',
            'no_telepon'            => 'required'
        ]);

        if ($request->total_auth == 0)
            return redirect()->route('Product')->with('message', 'Anda Belum Menambah Satu Pun Produk Pemesanan.');

        // Array
        $data = [
            'email'                     => $email,
            'no_telepon'                => $no_telepon
        ];

        // Menambahkan email, no telepon, dan dibuat ke dalam pesan
        $this->Pesan->createPesan($pesan_id->pesan_id, $data);

        // Mengubah semua produk yang berhubungan dengan pesanan di atas statusnya menjadi 1 
        $this->Pesan->updatePesanDetail($pesan_id->pesan_id);

        // Set Flashdata
        return redirect()->route('Product')->with('message', 'Pemesanan Ini Berhasil Dibuat. Anda Bisa Melihat Transaksi Ini Dibagian Riwayat Pemesanan.');
    }

    // Menambahkan produk ke cart
    public function tambahkanKeranjang(Request $request, $produk_id)
    {
        // Autentifikasi Login
        if (!session()->get('login'))
            return redirect()->route('Auth')->with('message', 'Anda Harus Login Terlebih Dahulu!');

        // Store 
        $qty       = $request->qty;

        // Validation
        $validated = $request->validate([
            'qty'           => 'required'
        ]);

        // Array
        $data = [
            'qty'                   => $qty,
            'produk_id'             => $produk_id
        ];

        // Menambahkan produk ke dalam pesan detail
        $this->Pesan->updatePesan(session()->get('login')['user_id'], $data);

        // Set Flashdata
        return redirect()->route('Product')->with('message', 'Produk Pompa Ini Berhasil Ditambahkan Ke Dalam Keranjang!');
    }
}
