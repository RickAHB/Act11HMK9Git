<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperherosPowersController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/superpowers', SuperherosPowersController::class)-> middleware('auth');
Route::get('/superpowers/create', [SuperherosPowersController::class, 'create'])->name('superpowers.create');

//Route::get('/superpower', [SuperherosPowersController::class, 'index']);

require __DIR__.'/auth.php';
