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


Route::get('/dashboard', function () {
    return view('Admin.Dashboard.dashboard');
});
Route::get('/aktakelahiran', function () {
    return view('Admin.Aktakelahiran.aktakelahiran');
});
Route::get('/aktakematian', function () {
    return view('Admin.Aktakematian.aktakematian');
});
Route::get('/datamasyarakat', function () {
    return view('Admin.Datamasyarakat.datamasyarakat');
});
