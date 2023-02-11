<?php

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

Route::get('/regis', function () {
    return view('Login.regis');
});


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
Route::get('/admin/datamasyarakat', function () {
    return view('Admin.Datamasyarakat.datamasyarakat');
});
Route::get('/admin/showdatamasyarakat', function () {
    return view('Admin.Datamasyarakat.show');
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
Route::get('/user/aktakematian', function () {
    return view('User.Aktakematian.aktakematian');
});
Route::get('/user/formulirkematian', function () {
    return view('User.Aktakematian.formulir');
});


// login regis
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'login_action'])->name('login.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// verifikasi
Route::put('verification/{id}', [ProfilUserController::class, 'verifikasi_user'])->name('verifikasi_user');

Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    route::get('dashboard-admin', [LoginController::class, 'dashboard_admin'])->name('dashboard-admin');
});
