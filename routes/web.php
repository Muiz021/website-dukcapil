<?php

use App\Http\Controllers\AdminController;
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


// login regis
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'login_action'])->name('login.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// route admin
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('dashboard-admin', [LoginController::class, 'dashboard_admin'])->name('dashboard-admin');

    // data masyarakat
    Route::get('/admin/datamasyarakat', [DatamasyarakatController::class, 'index'])->name('datamasyarakat.index');
    Route::get('/admin/showdatamasyarakat/{id}', [DatamasyarakatController::class, 'show']);
    Route::put('verification/{id}', [DatamasyarakatController::class, 'verifikasi_user'])->name('verifikasi_user');
    Route::delete('/admin/datamasyarakat/{id}', [DatamasyarakatController::class, 'destroy']);

    // akta kelahiran
    Route::get('/admin/dataaktakelahiran', [AdminController::class, 'indexkelahiran'])->name('datakelahiran.index');
    Route::get('/admin/detaildatakelahiran/{id}', [AdminController::class, 'detaildatakelahiran']);
    Route::put('verificationdatakelahiran/{id}', [AdminController::class, 'verifikasi_dataaktakelahiran'])->name('verifikasi_dataaktakelahiran');

    // akta kematian
    Route::get('/admin/dataaktakematian', [AdminController::class, 'indexkematian'])->name('datakematian.index');
    Route::get('/admin/detaildatakematian/{id}', [AdminController::class, 'detaildatakematian']);
    Route::put('verificationdatakematian/{id}', [AdminController::class, 'verifikasi_dataaktakematian'])->name('verifikasi_dataaktakematian');
});

//route user
Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
    Route::get('dashboard-user', [LoginController::class, 'dashboard_user'])->name('dashboard-user');

    Route::namespace('App\Http\Controllers')->group(function () {
        // akta kelahiran
        Route::get('/User/aktakelahiran', 'AktakelahiranController@index')->name('aktakelahiran.index');
        Route::get('/User/aktakelahiran/formulir', 'AktakelahiranController@create')->name('aktakelahiran.create');
        Route::post('/User/aktakelahiran', 'AktakelahiranController@store')->name('aktakelahiran.store');
        Route::get('/User/aktakelahiran/show/{id}', 'AktakelahiranController@show')->name('aktakelahiran.show');
        Route::get('/User/aktakelahiran/edit/{id}', 'AktakelahiranController@edit')->name('aktakelahiran.edit');
        Route::post('/User/aktakelahiran/update/{id}', 'AktakelahiranController@update')->name('aktakelahiran.update');
        // Route::delete('/User/aktakematian/{id}', 'AktakelahiranController@destroy')->name('aktakelahiran.destroy');

        // akta kematian
        Route::get('/User/aktakematian', 'AktakematianController@index')->name('aktakematian.index');
        Route::get('/User/aktakematian/formulir', 'AktakematianController@create')->name('aktakematian.create');
        Route::post('/User/aktakematian', 'AktakematianController@store')->name('aktakematian.store');
        Route::get('/User/aktakematian/show/{id}', 'AktakematianController@show')->name('aktakematian.show');
        Route::get('/User/aktakematian/edit/{id}', 'AktakematianController@edit')->name('aktakematian.edit');
        Route::post('/User/aktakematian/update/{id}', 'AktakematianController@update')->name('aktakematian.update');
        // Route::delete('/User/aktakematian/{id}', 'AktakematianController@destroy')->name('aktakematian.destroy');
    });
});
