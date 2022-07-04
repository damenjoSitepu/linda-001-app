<?php

use App\Http\Controllers\Auth\AuthPages;
use App\Http\Controllers\Auth\AuthProcess;
use App\Http\Controllers\Cart\CartPages;
use App\Http\Controllers\Cart\CartProcess;
use App\Http\Controllers\Guru\GuruPages;
use App\Http\Controllers\Product\ProductPages;
use App\Http\Controllers\Product\ProductProcess;
use App\Http\Controllers\User\UserPages;
use App\Http\Controllers\User\UserProcess;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth
Route::get('/', [AuthPages::class, 'index']);
Route::get('/', [AuthPages::class, 'index'])->name('Home');
Route::get('/Auth', [AuthPages::class, 'auth'])->name('Auth');
Route::get('/Registrasi', [AuthPages::class, 'registrasi'])->name('Registrasi');

Route::post('/CreateAccount', [AuthProcess::class, 'inregistrasi'])->name('BuatAkun');
Route::post('/LoginAccount', [AuthProcess::class, 'inakun'])->name('LoginAkun');
Route::get('/Keluar', [AuthProcess::class, 'outakun'])->name('Logout');

// User
Route::get('/User', [UserPages::class, 'index'])->name('User');
Route::post('User/buatProduk', [UserProcess::class, 'suntingInfoUtama'])->name('suntingInfoUtama');
Route::post('User/suntingInfoUtamaKedua', [UserProcess::class, 'suntingInfoUtamaKedua'])->name('suntingInfoUtamaKedua');
Route::post('User/suntingDataUmum', [UserProcess::class, 'suntingDataUmum'])->name('suntingDataUmum');
Route::post('User/suntingKeamanan', [UserProcess::class, 'suntingKeamanan'])->name('suntingKeamanan');
Route::get('/User/Management', [UserPages::class, 'management'])->name('UserAdmin');
// Route::get('/User/Management/{type}/Detail/{user_id}', [UserPages::class, 'detail'])->name('UserAdminDetail');
Route::get('/User/Management/{user_id}', [UserProcess::class, 'nonaktifkan'])->name('UserAdminDetail');
Route::get('/User/{type}', [UserPages::class, 'index'])->name('UserInfo');

// Product
Route::get('/Product', [ProductPages::class, 'index'])->name('Product');
Route::get('/Product/Management', [ProductPages::class, 'management'])->name('ProductAdmin');
Route::post('/Product/Management/CreateProduct', [ProductProcess::class, 'createProduct'])->name('buatProduk');
Route::post('/Product/Management/EditProduct/{produk_id}', [ProductProcess::class, 'editProduct'])->name('suntingProduk');
Route::post('/Product/Management/EditSpesifikasi/{produk_id}', [ProductProcess::class, 'editSpesifikasi'])->name('suntingSpesifikasi');
Route::post('/Product/Management/EditKelebihan/{produk_id}', [ProductProcess::class, 'editKelebihan'])->name('suntingKelebihan');
Route::post('/Product/Management/suntingPhotoProduk/{produk_id}', [ProductProcess::class, 'suntingPhotoProduk'])->name('suntingPhotoProduk');
Route::get('/Product/Management/{type}/Detail/{product_id}', [ProductPages::class, 'detailadmin'])->name('ProdukAdminDetail');
Route::get('/Product/Management/{product_id}/Delete', [ProductProcess::class, 'deleteProduct'])->name('DeleteProdukAdminDetail');
Route::get('/Product/Management/{product_id}/{spesifikasi}/DeleteSpesifikasi', [ProductProcess::class, 'deleteSpesifikasi'])->name('DeleteSpesifikasiAdminDetail');
Route::get('/Product/Management/{product_id}/{kelebihan}/DeleteKelebihan', [ProductProcess::class, 'deleteKelebihan'])->name('DeleteKelebihanAdminDetail');
Route::get('/Product/Management/{type}', [ProductPages::class, 'management'])->name('ProductAdminInfo');
Route::get('/Product/{type}/{product_id}', [ProductPages::class, 'detail'])->name('ProductDetail');


// Cart
Route::get('/Cart', [CartPages::class, 'index'])->name('Cart');
Route::post('/Cart/TambahkanKeranjang/{produk_id}', [CartProcess::class, 'tambahkanKeranjang'])->name('TambahkanKeranjang');
Route::post('/Cart/AjukanPemesanan', [CartProcess::class, 'ajukanPemesanan'])->name('AjukanPemesanan');
Route::post('/Cart/Manipulasi', [CartProcess::class, 'manipulasiPemesanan'])->name('ManipulasiStok');
Route::get('/Cart/Management', [CartPages::class, 'management'])->name('CartAdmin');
Route::get('/Cart/Management/TerimaPesanan/{user_id}/{pesan_id}', [CartProcess::class, 'terimaPesanan'])->name('TerimaPesanan');
Route::get('/Cart/Management/{type}/Detail/{user_id}/{pesan_id}', [CartPages::class, 'detail'])->name('CartAdminDetail');
Route::get('/History', [CartPages::class, 'history'])->name('History');
Route::post('/History/UpdatePembayaran/{user_id}/{pesan_id}', [CartProcess::class, 'updatePembayaran'])->name('UpdatePembayaran');
Route::get('/History/UploadBukti/{user_id}/{pesan_id}', [CartPages::class, 'uploadbukti'])->name('UploadBukti');
Route::get('/History/KonfirmasiBukti/{user_id}/{pesan_id}', [CartProcess::class, 'konfirmasiBukti'])->name('KonfirmasiBukti');
Route::get('/Cart/{type}', [CartPages::class, 'index'])->name('CartInfo');
Route::get('/History/Detail/{type}/{pesan_id}/GoBack/{search}', [CartPages::class, 'historydetail'])->name('Historial');
