<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create', [App\Http\Controllers\WebController::class, 'create'])->name('create');
Route::get('/view/{id?}', [App\Http\Controllers\WebController::class, 'view'])->name('view');
Route::post('/update/{id?}', [App\Http\Controllers\WebController::class, 'update'])->name('update');
Route::get('/delete/{id?}', [App\Http\Controllers\WebController::class, 'delete'])->name('delete');
