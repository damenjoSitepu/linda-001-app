<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesanModel extends Model
{
    use HasFactory;
    // Mendapatkan riwayat transaksi pemesanan berdasarkan status
    public function getCartHistory($search = 1)
    {
        $user_id = session()->get('login')['user_id'];

        if ($search == 1)
            return DB::select("SELECT * FROM pesan WHERE user_id={$user_id} AND status='1' ORDER BY pesan.pesan_id DESC");
        else if ($search == 2)
            return DB::select("SELECT * FROM pesan WHERE user_id={$user_id} AND status='2' ORDER BY pesan.pesan_id DESC");
        else if ($search == 3)
            return DB::select("SELECT * FROM pesan WHERE user_id={$user_id} AND status='3' ORDER BY pesan.pesan_id DESC");
        else if ($search == 4)
            return DB::select("SELECT * FROM pesan WHERE user_id={$user_id} AND status='4' ORDER BY pesan.pesan_id DESC");
    }

    // Mendapat riwayat transaksi pemesanan berdasarkan user admin
    public function getAdminCartHistory($search = 1)
    {
        if ($search == 1)
            return DB::select("SELECT * FROM pesan INNER JOIN pengguna ON pesan.user_id = pengguna.user_id WHERE status='1'");
        else if ($search == 2)
            return DB::select("SELECT * FROM pesan INNER JOIN pengguna ON pesan.user_id = pengguna.user_id WHERE status='2'");
        else if ($search == 3)
            return DB::select("SELECT * FROM pesan INNER JOIN pengguna ON pesan.user_id = pengguna.user_id WHERE status='3'");
        else if ($search == 4)
            return DB::select("SELECT * FROM pesan INNER JOIN pengguna ON pesan.user_id = pengguna.user_id WHERE status='4'");
    }

    // Mendapatkan detail pesan berdasarkan tipe produk yang sudah selesai dipesan ( 1 )
    public function getCheckedDetailpesan($user_id = '', $pesan_id = '')
    {
        return DB::select("SELECT *, produk.photo as produkphoto FROM pesan_detail INNER JOIN pesan ON pesan_detail.pesan_id = pesan.pesan_id INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id INNER JOIN pengguna ON pesan.user_id = pengguna.user_id WHERE pesan.pesan_id='{$pesan_id}' AND pesan.user_id='{$user_id}' AND pesan_detail.status=1");
    }

    // Mendapatkan detail pesan berdasarkan tipe produk
    public function getDetailPesan($user_id = '')
    {
        return DB::select("SELECT * FROM pesan_detail INNER JOIN pesan ON pesan_detail.pesan_id = pesan.pesan_id INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan.user_id='{$user_id}' AND pesan_detail.status=0");
    }

    // Mendapatkan pesan berdasarkan pesan id
    public function getPesanById($pesan_id = '')
    {
        return collect(DB::select("SELECT * FROM pesan WHERE pesan_id='{$pesan_id}'"))->first();
    }

    // Mendapatkan id pesan terbaru yang dimiliki oleh user
    public function getRecentPesanId($user_id = '')
    {
        return collect(DB::select("SELECT * FROM pesan WHERE user_id='{$user_id}' ORDER BY pesan_id DESC"))->first();
    }

    // Cek produk yang ada di dalam pesan detail 
    public function getPesanDetail($pesan_id = '', $produk_id = '')
    {
        return DB::select("SELECT * FROM pesan_detail INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan_id='{$pesan_id}' AND pesan_detail.produk_id='{$produk_id}' AND status=0");
    }

    // Cek produk yang ada di dalam pesan detail 
    public function getStock($pesan_id = '', $produk_id = '')
    {
        return collect(DB::select("SELECT * FROM pesan_detail INNER JOIN produk ON pesan_detail.produk_id = produk.produk_id WHERE pesan_id='{$pesan_id}' AND pesan_detail.produk_id='{$produk_id}' AND status=0"))->first();
    }

    // Hapus produk yang dipilih di dalam add to cart
    public function deleteStock($pesan_id = '', $product_id = '')
    {
        DB::statement("DELETE FROM pesan_detail WHERE pesan_id='{$pesan_id}' AND produk_id='{$product_id}'");
    }

    // Membuat pesanan 
    public function createPesan($pesan_id = '', $data = [])
    {
        $email      = $data['email'];
        $no_telepon = $data['no_telepon'];

        DB::statement("UPDATE pesan SET email='{$email}', no_telepon='{$no_telepon}', dibuat=CURRENT_DATE(), status='1' WHERE pesan_id='{$pesan_id}'");

        // Membuat pesan baru
        $this->insertPesan(session()->get('login')['user_id']);
    }

    // Konfirmasi Pesanan ( merubah status pesanannya menjadi 2 )
    public function konfirmasiPesanan($user_id = '', $pesan_id = '')
    {
        DB::statement("UPDATE pesan SET status='2', dikonfirmasi=CURRENT_DATE() WHERE user_id='{$user_id}' AND pesan_id='{$pesan_id}'");
    }

    // Konfirmasi bukti pembayaran yang telah dilakukan
    public function konfirmasiBukti($user_id = '', $pesan_id = '')
    {
        DB::statement("UPDATE pesan SET status='4', diverifikasi=CURRENT_DATE() WHERE user_id='{$user_id}' AND pesan_id='{$pesan_id}'");
    }

    // Mengubah semua status produk yang berada dalam pesanan tersebut menjadi 1 
    public function updatePesanDetail($pesan_id = '')
    {
        DB::statement("UPDATE pesan_detail SET status=1 WHERE pesan_id='{$pesan_id}'");
    }

    // Menambahkan produk ke dalam pesan detail
    public function updatePesan($user_id = '', $data = [])
    {
        // Mendapatkan id pesan terbaru
        $getRecentPesanId = $this->getRecentPesanId($user_id)->pesan_id;
        $qty        = $data['qty'];
        $produk_id  = $data['produk_id'];

        // Cek apakah produk sudah pernah ditambahkan di dalam no pesanan ini atau tidak
        if (empty($this->getPesanDetail($getRecentPesanId, $produk_id)))
            DB::statement("INSERT INTO pesan_detail(pesan_id,produk_id,qty,status) VALUES ('{$getRecentPesanId}','{$produk_id}','{$qty}','0')");
        else
            DB::statement("UPDATE pesan_detail SET qty = qty + {$qty} WHERE pesan_id='{$getRecentPesanId}' AND produk_id='{$produk_id}'");
    }

    // Update Foto Bukti Pembayaran
    public function updatePhoto($user_id = '', $pesan_id = '', $data = '')
    {
        DB::statement("UPDATE pesan SET photo='{$data}', status='3', dibayar=CURRENT_DATE() WHERE pesan.pesan_id='{$pesan_id}' AND pesan.user_id='{$user_id}'");
    }

    // Menambahkan data default pesan
    public function insertPesan($user_id)
    {
        DB::statement("INSERT INTO pesan(user_id,status) VALUES('{$user_id}','0')");
    }

    public function manipulateQuantity($status = true, $product_id = '')
    {
        // Dapatkan checkout id
        $getPesan = $this->getRecentPesanId(session()->get('login')['user_id'])->pesan_id;

        // Statusnya true = tambahkan, sebaliknya
        if ($status) {
            return DB::statement("UPDATE pesan_detail SET qty = qty + 1 WHERE pesan_id='{$getPesan}' AND pesan_detail.produk_id='{$product_id}'");
        } else {
            DB::statement("UPDATE pesan_detail SET qty = qty - 1 WHERE pesan_id='{$getPesan}' AND pesan_detail.produk_id='{$product_id}'");

            // Jika stok tersisa mencapai 0, maka hapus produknya. 
            $getStock = $this->getStock($getPesan, $product_id);

            if ($getStock->qty == 0)
                $this->deleteStock($getPesan, $product_id);
        }
    }
}
