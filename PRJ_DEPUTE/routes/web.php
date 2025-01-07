<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComissionController; 
use App\Http\Controllers\DeputeController; 

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

require __DIR__.'/auth.php';


Route::prefix('comission')->group(function () {
    Route::get('index', [ComissionController::class, 'index'])->name('comission.index'); 
    Route::get('create', [ComissionController::class, 'create'])->name('comission.create');
    Route::post('/', [ComissionController::class, 'store'])->name('comission.store');
    Route::get('{comission}/edit', [ComissionController::class, 'edit'])->name('comission.edit');
    Route::put('{comission}', [ComissionController::class, 'update'])->name('comission.update');
    Route::delete('{comission}', [ComissionController::class, 'destroy'])->name('comission.destroy');
});

Route::prefix('depute')->group(function () {
    Route::get('index', [DeputeController::class, 'index'])->name('depute.index'); 
    Route::get('create', [DeputeController::class, 'create'])->name('depute.create');
    Route::post('/', [DeputeController::class, 'store'])->name('depute.store');
    Route::get('{depute}/edit', [DeputeController::class, 'edit'])->name('depute.edit');
    Route::put('{depute}', [DeputeController::class, 'update'])->name('depute.update');
    Route::delete('{depute}', [DeputeController::class, 'destroy'])->name('depute.destroy');
});

Route::resource('comissions', ComissionController::class);
Route::resource('deputes', DeputeController::class);
