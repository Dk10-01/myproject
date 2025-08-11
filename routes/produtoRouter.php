<?php
use App\Http\Controllers\Produtocontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Produtocontroller::class, 'index'])->name('produto.index');
Route::get('/create-produto',[Produtocontroller::class, 'create'])->name('produto.create');
Route::post('/store-produto',[Produtocontroller::class, 'store'])->name('produto-store');
