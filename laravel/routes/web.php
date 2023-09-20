<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\playcontroller;
use App\Http\Controllers\sewacontroller;
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
    return view('index');
})->middleware('auth');

/// LOGIN & LOGOUT
Route::get('/login',[authcontroller::class, 'login'])->name('login');
Route::post('/login',[authcontroller::class, 'authent']);
Route::get('/logout', [authcontroller::class, 'logout'])->middleware('auth');
/// SIGNUP
Route::get('/signup',[authcontroller::class, 'signup'])->name('signup');
Route::get('/signup',[authcontroller::class, 'tambah'])->name('tambah');
Route::post('/signup',[authcontroller::class, 'simpan'])->name('simpan');

/// AWAL HALAMAN
Route::get('/index', function () {return view('index');})-> middleware('auth');
Route::get('/playstation', function () {return view('playstation');})-> middleware('auth');
Route::get('/penyewaan', function () {return view('penyewaan');})-> middleware('auth');
Route::get('/tentangkami', function () {return view('tentangkami');})-> middleware('auth');

/// CRUD
Route::get('/penyewaan', [sewacontroller::class, 'index'])-> middleware(['auth','only-admin']);
Route::get('/playstation', [playcontroller::class, 'play'])-> middleware('auth');

//tambah
Route::get('/penyewaan_tambah', [sewacontroller::class, 'tambah'])-> middleware('auth');
Route::post('/penyewaan_tambah', [sewacontroller::class, 'simpan'])-> middleware('auth');
//edit
Route::get('/penyewaan_edit/{id}', [sewacontroller::class, 'edit'])-> middleware(['auth','only-admin']);
Route::put('/penyewaan_edit/{id}', [sewacontroller::class, 'update'])-> middleware(['auth','only-admin']);
//delete
Route::get('/penyewaan_delete/{id}', [sewacontroller::class, 'delete'])-> middleware(['auth','only-admin']);
Route::delete('/penyewaan_destroy/{id}', [sewacontroller::class, 'destroy'])-> middleware(['auth','only-admin']);
