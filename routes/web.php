<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ConferenceController::class, 'index']) -> name('home.index');
Route::get('/conference/{id}', [ConferenceController::class, 'view'])->name('home.view');
Route::get('/create', [ConferenceController::class, 'create'])->name('home.create');
Route::get('/conference/{id}/edit', [ConferenceController::class, 'edit'])->name('home.edit');
Route::post('/', [ConferenceController::class, 'store'])->name('home.store');
Route::put('/conference/{id}/edit', [ConferenceController::class, 'update'])->name('home.update');
Route::delete('/conference/{id}', [ConferenceController::class, 'destroy'])->name('home.destroy');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
