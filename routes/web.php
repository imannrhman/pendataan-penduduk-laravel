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


Route::get('/about', function () {
    return view('public.about');
})->name('about');


Route::get('/profile', function () {
    return view('public.profile');
})->name('profile');

Route::get('/coba-coba', function () {
    return view('public.test');
})->name('ujang');
