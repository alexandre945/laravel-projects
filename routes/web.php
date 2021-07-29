<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teste2Controller;
use App\Http\Controllers\LisstController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [teste2Controller::class, 'index'])->name('index');
Route::get('/create', [teste2Controller::class, 'create'])->name('create');
Route::post('/store', [teste2Controller::class, 'store'])->name('store');
Route::get('/blog', [teste2Controller::class, 'blog'])->name('blog');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list', [LisstController::class, 'index'])->name('list.index');
Route::post('/list/store', [LisstController::class, 'store'])->name('list.store');
