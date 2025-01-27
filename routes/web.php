<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'registerForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
    Route::get('/pets/filter', [PetController::class, 'filter'])->name('pets.filter');
});