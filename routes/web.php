<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [Usercontroller::class, 'index'])->name('user.index');
Route::get('/create-user',[Usercontroller::class, 'create'])->name('user.create');
Route::post('/store-user',[Usercontroller::class, 'store'])->name('user-store');
