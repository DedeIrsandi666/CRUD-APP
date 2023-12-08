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
    return view('dasboard');
});
Route::get('/dasboard', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');



Route::resource('adminmenu', App\Http\Controllers\AdminMenuController::class)->middleware(['adminwantu','auth']);
Route::resource('keuangan', App\Http\Controllers\KeuanganController::class)->middleware(['adminwantu','auth']);




Route::resource('menu', \App\Http\Controllers\MenuController::class)->middleware('auth');
Route::resource('pemesanan', \App\Http\Controllers\PemesananController::class)->middleware('auth');

Route::get('/cari', [App\Http\Controllers\MenuController::class, 'cari']);