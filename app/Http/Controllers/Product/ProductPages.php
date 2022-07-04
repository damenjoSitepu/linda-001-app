<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductPages extends Controller
{

    public $Product;

    public function __construct()
    {
        $this->Product = new \App\Models\ProductModel();
    }

    // Halaman Product
    public function index()
    {
        // Data
        $data = [
            'title'     => 'Produk',
            'opt'       => 'Produk',
            'getProduk'    => $this->Product->getProducts()
        ];


        return view("product/index", $data);
    }

    // Halaman Detail Product
    public function detail($type = '', $product_id = '')
    {
        // Data
        $data = [
            'title'     => 'Detail Produk',
            'type'      => $type ? $type : '',
            'opt'       => 'Produk',
            'getProduk' => $this->Product->getProduct($product_id),
            'getDetail' => $this->Product->getDetailProduct($product_id),
            'getDetails' => $this->Product->getDetailsProduct($product_id),
        ];


        return view("product/detail", $data);
    }

    // Halaman Management Product
    public function management($type = '')
    {
        // Data
        $data = [
            'title'         => 'Produk',
            'opt'           => 'Produk',
            'type'          => $type ? $type : '',
            'getProduk'     => $this->Product->getProducts(),
        ];

        return view("product/admin", $data);
    }

    // Halaman Detail Management Produk
    public function detailadmin($type = '', $product_id = '')
    {
        // Data
        $data = [
            'title'     => 'Detail Produk',
            'opt'       => 'Produk',
            'getProduk' => $this->Product->getProduct($product_id),
            'getDetail' => $this->Product->getDetailProduct($product_id),
            'getDetails' => $this->Product->getDetailsProduct($product_id),
            'type'      => $type ? $type : ''
        ];

        return view("product/admin-detail", $data);
    }
}
