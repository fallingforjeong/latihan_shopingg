<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah kita mendaftarkan semua route.
|
*/

// ===================================================================
// == SUMBER DATA PRODUK (SATU TEMPAT) ==
// ===================================================================
// Kita definisikan produk di sini, SATU KALI SAJA.
// Perhatikan: Kuncinya (1, 2, 3...) HARUS sama dengan 'id' di dalamnya.
// Ini adalah "database" kita.

$produk_database = [
    1 => [
        'id' => 1, 
        'nama' => 'Air Jordan 1 Low "Mocha Drift"', 
        'harga' => '$219 USD', 
        'foto' => 'images/niketravis.jpg', 
        'deskripsi' => 'The Air Jordan 1 Low “Mocha Drift” brings a refined mix of brown, cream, and white tones for a luxurious yet casual look. Crafted with premium leather and the signature reversed Swoosh, this pair delivers both street-ready style and timeless Jordan heritage. Perfect for everyday wear or to elevate your sneaker rotation.'
    ],
    2 => [
        'id' => 2, 
        'nama' => 'Adidas Samba OG "Navy White"', 
        'harga' => '$94 USD', 
        'foto' => 'images/samba.jpg', 
        'deskripsi' => 'Timeless and versatile, the Adidas Samba OG “Navy White” pairs deep navy suede with crisp white leather stripes. Originally designed for indoor soccer, this heritage sneaker has become a global fashion icon. Lightweight, stylish, and easy to pair — perfect for everyday wear or a retro-inspired street look.'
    ],
    3 => [
        'id' => 3, 
        'nama' => 'New Balance 530 "White Silver"', 
        'harga' => '$119 USD', 
        'foto' => 'images/newbalance.jpg', 
        'deskripsi' => 'The New Balance 530 “White Silver” brings together vintage runner aesthetics and modern performance. Built with breathable mesh, reflective silver details, and ABZORB cushioning for maximum comfort. A sleek, sporty sneaker that delivers all-day support — ideal for workouts, casual fits, or travel.'
    ],
    4 => [
        'id' => 4, 
        'nama' => 'Converse All Star Pro Blaze "Black Gum"', 
        'harga' => '$81 USD', 
        'foto' => 'images/runstar.jpg', 
        'deskripsi' => 'The Converse All Star Pro Blaze “Black Gum” fuses classic design with contemporary flair. Featuring a black suede upper, white star-chevron logo, and a signature gum sole, it balances heritage and modern appeal. Durable, comfortable, and effortlessly stylish — your go-to sneaker for laid-back days and streetwear outfits.'
    ],
    5 => [
        'id' => 5, 
        'nama' => 'Balenciaga Track Sneaker "Triple Black"', 
        'harga' => '$1,150 USD', 
        'foto' => 'images/balenciaga.jpg', 
        'deskripsi' => 'The Balenciaga Track "Triple Black" redefines luxury performance footwear. Designed with a multi-layered upper made from mesh and nylon, this sneaker delivers both futuristic style and comfort. The sculpted sole provides superior stability and cushioning, while reflective accents and bold Balenciaga branding emphasize its high-fashion edge. A statement piece that blends innovation, functionality, and luxury — built for those who dare to stand out.'
    ],
    6 => [
        'id' => 6, 
        'nama' => 'Reebok Club C Double Seasonal "Chalk & Green"', 
        'harga' => '$85 USD', 
        'foto' => 'images/reebok.jpg', 
        'deskripsi' => 'The Reebok Club C Double Seasonal elevates a court classic. Designed with a clean, premium leather upper in Chalk, this sneaker delivers timeless style and everyday comfort. The signature stacked "Double" midsole provides a bold, modern platform lift and lightweight cushioning, while heritage green accents on the iconic vector stripes and heel tab nod to its retro roots. A statement piece that blends iconic tennis heritage with a confident, contemporary stance.'
    ],
];


// ===================================================================
// == ROUTE HALAMAN ==
// ===================================================================

// Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman Login (GET)
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login (POST)
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'winter' && $password === '010101') {
        return redirect()->route('produk');
    } else {
        return back()->with('error', 'Wrong Username atau Password!');
    }
})->name('login.process');


// Halaman Produk Penjualan (GET)
Route::get('/produk', function () use ($produk_database) {
    return view('produk', ['produk' => $produk_database]);
})->name('produk');


// Halaman Detail Pembelian (GET)
Route::get('/produk/{id}', function ($id) use ($produk_database) {
    
    if (!array_key_exists($id, $produk_database)) {
        abort(404, 'Produk tidak ditemukan');
    }
    
    $detail = $produk_database[$id];
    
    return view('detail', compact('detail'));
    
})->name('produk.detail');


// Logout
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');


// ===================================================================
// == [BARU] HALAMAN CHECKOUT / PEMBAYARAN ==
// ===================================================================
Route::get('/checkout/{id}', function ($id) use ($produk_database) {
    
    // 1. Cek apakah ID ada
    if (!array_key_exists($id, $produk_database)) {
        abort(404, 'Produk tidak ditemukan');
    }
    
    // 2. Ambil data produk spesifik
    $detail = $produk_database[$id];
    
    // 3. Kirim data ke view 'checkout' yang baru
    return view('checkout', compact('detail'));
    
})->name('checkout');