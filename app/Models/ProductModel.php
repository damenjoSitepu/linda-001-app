<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    // Mengambil data product berdasarkan nilai dan column
    public function getProduct($value = '', $column = 'produk_id')
    {
        return collect(DB::select("SELECT * FROM produk WHERE {$column}='{$value}' ORDER BY produk_id DESC"))->first();
    }

    // Mengambil data detail product
    public function getDetailProduct($product_id = '1')
    {
        return DB::select("SELECT * FROM produk_detail WHERE produk_id='{$product_id}'");
    }

    // Mengambil data detail product
    public function getDetailsProduct($product_id = '1')
    {
        return DB::select("SELECT * FROM produk_details WHERE produk_id='{$product_id}'");
    }

    // Mengambil data detail product berdasarkan id dan nama spesifikasi
    public function getDetailProductByIdAndName($product_id = '', $spesifikasi = '')
    {
        return DB::select("SELECT * FROM produk_detail WHERE produk_id='{$product_id}' AND spesifikasi='{$spesifikasi}'");
    }

    // Mengambil data detail product berdasarkan id dan nama spesifikasi
    public function getDetailProductsByIdAndName($product_id = '', $kelebihan = '')
    {
        return DB::select("SELECT * FROM produk_details WHERE produk_id='{$product_id}' AND kelebihan='{$kelebihan}'");
    }

    // Mengambil Seluruh Data Products Berdasarkan tipe produk
    public function getProducts()
    {
        return DB::select("SELECT * FROM produk ORDER BY produk_id ASC");
    }

    // Delete Spesifikasi
    public function deleteSpesifikasi($product_id = '1', $spesifikasi = '')
    {
        DB::statement("DELETE FROM produk_detail WHERE produk_id='{$product_id}' AND spesifikasi='{$spesifikasi}'");
    }

    // Delete Kelebihan
    public function deleteKelebihan($product_id = '1', $kelebihan = '')
    {
        DB::statement("DELETE FROM produk_details WHERE produk_id='{$product_id}' AND produk_details_id='{$kelebihan}'");
    }

    // Delete Product 
    public function deleteProduct($product_id = '1')
    {
        DB::statement("DELETE FROM produk WHERE produk_id='{$product_id}'");
    }

    // Insert Product
    public function insertProduct($data)
    {
        $nama_produk    = $data['nama_produk'];
        $harga          = $data['harga'];
        $kondisi        = $data['kondisi'];

        DB::statement("INSERT INTO produk(nama_produk,harga,kondisi) VALUES ('{$nama_produk}','{$harga}','{$kondisi}')");
    }

    // sunting spesifikasi
    public function editSpesifikasi($produk_id = '1', $data = [])
    {
        $spesifikasi    = $data['spesifikasi'];
        $value          = $data['value'];

        DB::statement("INSERT INTO produk_detail(produk_id,spesifikasi,value) VALUES('{$produk_id}','{$spesifikasi}','{$value}')");
    }

    // sunting kelebihan
    public function editKelebihan($produk_id = '1', $data = [])
    {
        $kelebihan    = $data['kelebihan'];

        DB::statement("INSERT INTO produk_details(produk_id,kelebihan) VALUES('{$produk_id}','{$kelebihan}')");
    }

    // Edit Product
    public function editProduct($produk_id = '1', $data = [])
    {
        $nama_produk    = $data['nama_produk'];
        $kondisi        = $data['kondisi'];
        $harga          = $data['harga'];

        DB::statement("UPDATE produk SET nama_produk='{$nama_produk}', harga='{$harga}', kondisi='{$kondisi}' WHERE produk_id='{$produk_id}'");
    }

    // Update Photo Produk
    public function updatePhoto($produk_id = '1', $photo = '')
    {
        DB::statement("UPDATE produk SET photo='{$photo}' WHERE produk_id='{$produk_id}'");
    }
}
