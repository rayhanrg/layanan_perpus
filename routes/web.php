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

Route::get('/sumbangan-buku', function () {
    return view('sumbangan-buku');
});
Route::get('/validasi-ta', function () {
    return view('validasi-ta');
Route::get('/admin-lta', function () {
    return view('admin-lta');
Route::get('/admin-user', function () {
    return view('admin-user');
Route::get('/admin-bebaspustaka', function () {
    return view('admin-bebaspustaka');
});
