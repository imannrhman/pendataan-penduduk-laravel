<?php


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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/struktur', function () {
    return view('public.struktur');
})->name('struktur');

Route::get('/visi', function () {
    return view('public.visi');
})->name('visi');

Route::get('/data_kk', function () {
    return view('public.data_kk');
})->name('data_kk');

Route::get('/data_wrg', function () {
    return view('public.data_wrg');
})->name('data_wrg');

Route::get('/data_usia', function () {
    return view('public.data_usia');
})->name('data_usia');

Route::get('/data_agama', function () {
    return view('public.data_agama');
})->name('data_agama');

Route::get('/info_rw', function () {
    return view('public.info_rw');
})->name('info_rw');

Route::get('/info_rt', function () {
    return view('public.info_rt');
})->name('info_rt');

Route::get('/info_brt', function () {
    return view('public.info_brt');
})->name('info_brt');

Route::get('/layanan_ktp', function () {
    return view('public.layanan_ktp');
})->name('layanan_ktp');

Route::get('/layanan_kk', function () {
    return view('public.layanan_kk');
})->name('layanan_kk');

Route::get('/layanan_ak', function () {
    return view('public.layanan_ak');
})->name('layanan_ak');

Route::get('/about', function () {
    return view('public.about');
})->name('about');
