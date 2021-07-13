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

// Route::get('/', function () {
//     return view('layouts.app');
// });


Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/home', \App\Http\Livewire\Home::class);
Route::get('/kategori', \App\Http\Livewire\Kategori::class);
Route::get('/tentang', \App\Http\Livewire\Tentang::class);
Route::get('/register', \App\Http\Livewire\Register::class);

Route::get('/login', \App\Http\Livewire\Login::class);


// halaman admin
Route::get('/adminDashboard', \App\Http\Livewire\AdminDashboard::class);
Route::get('/adminDataBarang', \App\Http\Livewire\AdminDataBarang::class);
Route::get('/adminInvoice', \App\Http\Livewire\AdminInvoice::class);

