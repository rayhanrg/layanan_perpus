<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kp', function () {
    return view('kp');
});

Route::get('/bebaspustaka', function () {
    return view('bebaspustaka');
});
Route::get('/bp-cuti&undur', function () {
    return view('bp-cuti&undur');
});
Route::get('/bp-transaksi', function () {
    return view('bp-transaksi');
});
Route::get('/bp-wisuda&ijazah', function () {
    return view('bp-wisuda&ijazah');
});
Route::get('/bp-wisuda&ijazah2', function () {
    return view('bp-wisuda&ijazah2');
});


Route::get('/login-admin', function () {
    return view('login-admin');
});
Route::get('/admin-sumbanganbuku', function () {
    return view('admin-sumbanganbuku');
});
Route::get('/sumbangan-buku', function () {
    return view('sumbangan-buku');
});
Route::get('/validasi-ta', function () {
    return view('validasi-ta');
});
Route::get('/admin-lta', function () {
    return view('admin-lta');
});
Route::get('/admin-user', function () {
    return view('admin-user');
});
Route::get('/admin-bebaspustaka', function () {
    return view('admin-bebaspustaka');
});
