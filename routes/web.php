<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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
    return view('auth/login');
});

Route::get('data-siswa', [SekolahController::class, 'fsiswa']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('siswa', SiswaController::class)->middleware('can:isAdmin');
Route::resource('siswas', SiswaController::class);
Route::resource('users', UserController::class);
Route::resource('siswa', SiswaController::class)->only('show')->middleware('can:isAdminSiswa');
Route::resource('user', UserController::class)->middleware('can:isAdmin');