<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/barang/trash', [BarangController::class, 'trash'])->name('barang.trash');
    Route::get('/barang/kembalikan/{$id}', [BarangController::class, 'restore'])->name('barang.restore');
    Route::get('/barang/kembalikan_semua', [BarangController::class, 'restoreAll'])->name('barang.restoreAll');
    Route::get('/barang/hapus_permanen/{$id}', [BarangController::class, 'delete'])->name('barang.delete');
    Route::get('/barang/hapus_semua', [BarangController::class, 'deleteAll'])->name('barang.deleteAll');
    Route::resource('/barang', BarangController::class);

    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
        
});
