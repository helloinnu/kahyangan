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

Route::get('/master-pengguna', function () {
    return view('master/pengguna');
});
Route::get('/master-perkebunan', function () {
    return view('master/perkebunan');
});
Route::get('/master-afdeling', function () {
    return view('master/afdeling');
});
Route::get('/master-blok', function () {
    return view('master/blok');
});
Route::get('/master-komd-utama', function () {
    return view('master/komd-utama');
});
Route::get('/master-komd-sekunder', function () {
    return view('master/komd-sekunder');
});
Route::get('/master-tahapan-tanam', function () {
    return view('master/tahapan-tanam');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
