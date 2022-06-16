<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active'=> 'home',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/aboutus', function () {
    return view('aboutus', [
        "title" => "About Us",
        'active'=> 'aboutus',
    ]);
});

Route::get('/profil', function () {
    return view('profil.index', [
        "title" => "Profil",
        'active'=> 'profil',
    ]);
})->middleware('auth');

Route::get('/alamat', function () {
    return view('profil.alamat', [
        "title" => "Alamat",
        'active'=> 'alamat',
    ]);
})->middleware('auth');

Route::get('/password', function () {
    return view('profil.password', [
        "title" => "Ganti Password",
        'active'=> 'password',
    ]);
})->middleware('auth');

Route::get('/riwayatpembelian', function () {
    return view('profil.riwayat', [
        "title" => "Riwayat Pembelian",
        'active'=> 'riwayat',
    ]);
})->middleware('auth');

Route::get('/wishlist', function () {
    return view('profil.wishlist', [
        "title" => "Wishlist",
        'active'=> 'wishlist',
    ]);
})->middleware('auth');

Route::get('/editprofil', function () {
    return view('profil.editprofil', [
        "title" => "Edit Profil",
        'active'=> 'editprofil',
    ]);
})->middleware('auth');

Route::get('/tambahalamat', function () {
    return view('profil.tambahalamat', [
        "title" => "Tambah Alamat",
        'active'=> 'tambahalamat',
    ]);
})->middleware('auth');

Route::get('/profil2', function () {
    return view('profil.profil2', [
        "title" => "Profil",
        'active'=> 'profil2',
    ]);
})->middleware('auth');

Route::get('/alamat2', function () {
    return view('profil.alamat2', [
        "title" => "Alamat",
        'active'=> 'alamat2',
    ]);
})->middleware('auth');

Route::get('/detailriwayat-bayar', function () {
    return view('profil.detailriwayat-bayar', [
        "title" => "Detail Pesanan",
        'active'=> 'detailriwayat',
    ]);
})->middleware('auth');

Route::get('/detailriwayat-kirim', function () {
    return view('profil.detailriwayat-kirim', [
        "title" => "Detail Pesanan",
        'active'=> 'detailriwayat',
    ]);
})->middleware('auth');

Route::get('/detailriwayat-selesai', function () {
    return view('profil.detailriwayat-selesai', [
        "title" => "Detail Pesanan",
        'active'=> 'detailriwayat',
    ]);
})->middleware('auth');

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ",
        'active'=> 'faq',
    ]);
});

Route::get('/syarat', function () {
    return view('syarat', [
        "title" => "Syarat dan ketentuan",
        'active'=> 'syarat',
    ]);
});

Route::get('/kebijakan', function () {
    return view('kebijakan', [
        "title" => "Kebijakan Privasi",
        'active'=> 'kebijakan',
    ]);
});

Route::get('/artikel', function () {
    return view('artikel.index', [
        "title" => "Artikel",
        'active'=> 'artikel',
    ]);
});
Route::get('/detailartikel', function () {
    return view('artikel.detailartikel', [
        "title" => "Detail Artikel",
        'active'=> 'detailartikel',
    ]);
});
Route::get('/notifikasi', function () {
    return view('notifikasi', [
        "title" => "Notifikasi",
        'active'=> 'notifikasi',
    ]);
})->middleware('auth');
Route::get('/notif-baca', function () {
    return view('notif-baca', [
        "title" => "Notifikasi",
        'active'=> 'notif-baca',
    ]);
})->middleware('auth');

Route::get('/carabayar', function () {
    return view('carabayar', [
        "title" => "Cara Bayar",
        'active'=> 'carabayar',
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk",
        'active'=> 'produk',
    ]);
});

Route::get('/detail-produk', function () {
    return view('detail-produk', [
        "title" => "Detail Produk",
        'active'=> 'detail-produk',
    ]);
});


Route::get('/keranjang', function () {
    return view('keranjang', [
        "title" => "Keranjang",
        'active'=> 'keranjang',
    ]);
})->middleware('auth');

Route::get('/keranjang2', function () {
    return view('keranjang2', [
        "title" => "Keranjang",
        'active'=> 'keranjang',
    ]);
})->middleware('auth');

Route::get('/detailpembelian', function () {
    return view('detailpembelian', [
        "title" => "Detail Pembelian",
        'active'=> 'detailpembelian',
    ]);
})->middleware('auth');