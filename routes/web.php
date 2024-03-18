<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])->name('index');
Route::post('/', [\App\Http\Controllers\OrderController::class, 'store'])->name('store');
Route::get('/step2', [\App\Http\Controllers\OrderController::class, 'step2'])->name('step2');
Route::post('/step2', [\App\Http\Controllers\OrderController::class, 'store2'])->name('store2');
Route::get('/step3', [\App\Http\Controllers\OrderController::class, 'step3'])->name('step3');
Route::post('/step3', [\App\Http\Controllers\OrderController::class, 'store3'])->name('store3');
Route::get('/step4', [\App\Http\Controllers\OrderController::class, 'step4'])->name('step4');
Route::get('/success', [\App\Http\Controllers\OrderController::class, 'success'])->name('success');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
