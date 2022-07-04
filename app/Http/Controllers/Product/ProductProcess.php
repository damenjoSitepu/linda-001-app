<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductProcess extends Controller
{
    public $Product;

    public function __construct()
    {
        $this->Product = new \App\Models\ProductModel();
    }

    // Proses Sunting spesifikasi
    public function editSpesifikasi(Request $request, $produk_id = '')
    {
        // Store 
        $spesifikasi = $request->spesifikasi;
        $value = $request->value;

        // Validation
        $validated = $request->validate(
            [
                'spesifikasi'       => 'required',
                'value'             => 'required'
            ]
        );

        // Jika nama menu sudah ada di dalam database dengan produk id yang dimasukkan, maka sistem akan menolaknya
        if (!empty($this->Product->getDetailProductByIdAndName($produk_id, $spesifikasi)))
            return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-spesifikasi', 'product_id' => $produk_id])->with('message', "Jenis Spesifikasi Sudah Ada!");

        // Array
        $data = [
            'spesifikasi'           => $spesifikasi,
            'value'                 => $value,
        ];

        // Ubah data user
        $this->Product->editSpesifikasi($produk_id, $data);

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-spesifikasi', 'product_id' => $produk_id])->with('message', "Data Spesifikasi Untuk Pompa Id: {$produk_id} Berhasil Ditambahkan!");
    }

    // Proses Sunting kelebihan
    public function editKelebihan(Request $request, $produk_id = '')
    {
        // Store 
        $kelebihan = $request->kelebihan;

        // Validation
        $validated = $request->validate(
            [
                'kelebihan'       => 'required'
            ]
        );

        // Jika nama menu sudah ada di dalam database dengan produk id yang dimasukkan, maka sistem akan menolaknya
        if (!empty($this->Product->getDetailProductsByIdAndName($produk_id, $kelebihan)))
            return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-kelebihan', 'product_id' => $produk_id])->with('message', "Kelebihan Pompa Ini Sudah Ada!");

        // Array
        $data = [
            'kelebihan'           => $kelebihan
        ];

        // Ubah data user
        $this->Product->editKelebihan($produk_id, $data);

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-kelebihan', 'product_id' => $produk_id])->with('message', "Varian Kelebihan Untuk Pompa Id: {$produk_id} Berhasil Ditambahkan!");
    }

    // Proses Hapus Spesifikasi
    public function deleteSpesifikasi($produk_id = '', $spesifikasi = '')
    {
        // Hapus
        $this->Product->deleteSpesifikasi($produk_id, $spesifikasi);

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-spesifikasi', 'product_id' => $produk_id])->with('message', 'Data Spesifikasi Berhasil Dihapus!');
    }

    // Proses Hapus Kelebihan
    public function deleteKelebihan($produk_id = '', $kelebihan = '')
    {

        // Hapus
        $this->Product->deleteKelebihan($produk_id, $kelebihan);

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'tambahkan-kelebihan', 'product_id' => $produk_id])->with('message', 'Data Kelebihan Yang Dipilih Berhasil Dihapus!');
    }

    // Proses Hapus Produk
    public function deleteProduct($produk_id = '')
    {
        // Hapus
        $this->Product->deleteProduct($produk_id);

        // Set Flashdata
        return redirect()->route('ProductAdmin')->with('message', 'Data Produk Berhasil Dihapus!');
    }

    // Proses Sunting Photo Produk
    public function suntingPhotoProduk(Request $request, $produk_id = '')
    {
        // Store Photonya
        if ($request->file('photo')) {
            $data = $request->file('photo')->store('products_img');
            $this->Product->updatePhoto($produk_id, $data);
        }

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'sunting-foto-produk', 'product_id' => $produk_id])->with('message', 'Foto Produk Ini Berhasil Diubah');
    }

    // Proses Sunting Produk
    public function editProduct(Request $request, $produk_id = '')
    {
        // Store 
        $nama_produk        = $request->nama_produk;
        $harga              = $request->harga;
        $kondisi            = $request->kondisi;

        // Validation
        $validated = $request->validate([
            'nama_produk'           => 'required',
            'harga'                 => 'required'
        ]);

        // Array
        $data = [
            'nama_produk'               => $nama_produk,
            'harga'                     => $harga,
            'kondisi'                   => $kondisi,
        ];

        // Ubah data user
        $this->Product->editProduct($produk_id, $data);

        // Set Flashdata
        return redirect()->route('ProdukAdminDetail', ['type' => 'informasi-produk', 'product_id' => $produk_id])->with('message', 'Data Pompa Berhasil Diubah!');
    }

    // Proses Buat Produk
    public function createProduct(Request $request)
    {
        // Store 
        $nama_produk            = $request->nama_produk;
        $harga                  = $request->harga;
        $kondisi                = $request->kondisi;

        // Validation
        $validated = $request->validate([
            'nama_produk'           => 'required',
            'harga'                 => 'required'
        ]);

        // Array
        $data = [
            'nama_produk'           => $nama_produk,
            'harga'                 => $harga,
            'kondisi'               => $kondisi,
        ];

        // Ubah data user
        $this->Product->insertProduct($data);

        // Set Flashdata
        return redirect()->route('ProductAdmin')->with('message', "Data Pompa Air Baru Berhasil Ditambahkan!");
    }
}
