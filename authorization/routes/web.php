<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
  $user = Auth::user(); // Получим текущего авторизованного пользователя
  return view('dashboard', compact('user'));
})->middleware(['auth'])->name('dashboard');