<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', fn() => view('home'));

Route::view('/', 'home')->name('beranda');
Route::get('/tentang', [AboutController::class, 'index'])->name('tentang');
Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'submitForm'])->name('kontak.kirim');

// Route::get('/about', fn() => view('about'));
// Route::get('/services', fn() => view('services'));
// Route::get('/team', fn() => view('team'));
// Route::get('/contact', fn() => view('contact'));