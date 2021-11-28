<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LaundryKatController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimoniController;

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
    return view('user.index');
});

// ROUTE USER
Route::get('/', [UserController::class, 'index']);


Route::get('register', [AuthController::class, 'registerform']);
Route::post('auth/register', [AuthController::class, 'register']);

Route::resource('login', LoginController::class);

Route::get('admin', [AdminController::class, 'index']);

Route::resource('about', AboutController::class);

Route::resource('laundrykat', LaundryKatController::class);

Route::resource('pickup', PickupController::class);

Route::resource('transaksi', TransaksiController::class);

Route::resource('rekap', RekapController::class);

Route::resource('testimoni', TestimoniController::class);

Route::get('pelanggan', [PelangganController::class, 'index']);



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
