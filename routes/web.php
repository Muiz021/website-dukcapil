<?php

use App\Http\Controllers\DatamasyarakatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


Route::get('/admin/aktakelahiran', function () {
    return view('Admin.Aktakelahiran.aktakelahiran');
});
Route::get('/admin/detailaktakelahiran', function () {
    return view('Admin.Aktakelahiran.show');
});
Route::get('/admin/aktakematian', function () {
    return view('Admin.Aktakematian.aktakematian');
});
Route::get('/admin/detailaktakematian', function () {
    return view('Admin.Aktakematian.show');
});


Route::get('/user/dashboard', function () {
    return view('User.Dashboard.dashboard');
});
Route::get('/user/aktakelahiran', function () {
    return view('User.Aktakelahiran.aktakelahiran');
});
Route::get('/user/formulirkelahiran', function () {
    return view('User.Aktakelahiran.formulir');
});
Route::get('/user/editaktakelahiran', function () {
    return view('User.Aktakelahiran.edit');
});
Route::get('/user/showaktakelahiran', function () {
    return view('User.Aktakelahiran.show');
});


Route::get('/user/aktakematian', function () {
    return view('User.Aktakematian.aktakematian');
});
Route::get('/user/formulirkematian', function () {
    return view('User.Aktakematian.formulir');
});
Route::get('/user/editaktakematian', function () {
    return view('User.Aktakematian.edit');
});
Route::get('/user/showaktakematian', function () {
    return view('User.Aktakematian.show');
});



// login regis
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'login_action'])->name('login.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// verifikasi
Route::put('verification/{id}',[DatamasyarakatController::class,'verifikasi_user'])->name('verifikasi_user');

// route admin
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('dashboard-admin', [LoginController::class, 'dashboard_admin'])->name('dashboard-admin');

    // data masyarakat
    Route::get('/admin/datamasyarakat', [DatamasyarakatController::class, 'index'])->name('datamasayarakat.index');
    Route::get('/admin/showdatamasyarakat/{id}', [DatamasyarakatController:: class, 'show']);
    Route::delete('/admin/datamasyarakat/{id}', [DatamasyarakatController:: class, 'destroy']);
});

//route user
Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
    Route::get('dashboard-user', [LoginController::class, 'dashboard_user'])->name('dashboard-user');
});
