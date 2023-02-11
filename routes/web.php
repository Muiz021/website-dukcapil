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
    return view('Login.login');
});


Route::get('/admin/dashboard', function () {
    return view('Admin.Dashboard.dashboard');
});
Route::get('/admin/aktakelahiran', function () {
    return view('Admin.Aktakelahiran.aktakelahiran');
});
Route::get('/admin/aktakematian', function () {
    return view('Admin.Aktakematian.aktakematian');
});
Route::get('/admin/datamasyarakat', function () {
    return view('Admin.Datamasyarakat.datamasyarakat');
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
Route::get('/user/datamasyarakat', function () {
    return view('User.Datamasyarakat.datamasyarakat');
});
