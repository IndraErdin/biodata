<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesrtadidikPDF;
use App\Http\Controllers\usersC;

Route::get('pesertadidik/pdf',[PesrtadidikPDF::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
Route::resource('guru', GuruR::class);

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('register', [usersC::class, 'register'])->name('register');
Route::get('login', [usersC::class, 'login'])->name('login');
Route::post('register', [usersC::class, 'register_action'])->name('register.action');
Route::post('login', [usersC::class, 'login_action'])->name('login.action');
Route::get('logout', [usersC::class, 'logout'])->name('logout');