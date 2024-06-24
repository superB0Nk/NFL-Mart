<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('Pelanggan.home');
});
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/createadmin',[AdminController::class, 'create']);



