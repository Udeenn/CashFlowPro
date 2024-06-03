<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data', [App\Http\Controllers\CashflowController::class, 'index'])->name('data');
Route::get('/data/json', [App\Http\Controllers\CashflowController::class, 'json']);
Route::get('/data/filter', [App\Http\Controllers\CashflowController::class, 'filter']);
Route::get('/download-pdf', [App\Http\Controllers\CashflowController::class, 'downloadpdf']);
Route::get('{id}/delete', [App\Http\Controllers\CashflowController::class, 'destroy']);
Route::post('/store', [App\Http\Controllers\CashflowController::class, 'store'])->name('store');
Route::get('/data/{id}/edit', [App\Http\Controllers\CashflowController::class, 'edit']);
Route::put('/data/{id}', [App\Http\Controllers\CashflowController::class, 'update']);
//Route::get('/data/show/{id}', [App\Http\Controllers\CashflowController::class, 'show']);
//Route::put('/data/update/{id}', [App\Http\Controllers\CashflowController::class, 'update']);

Auth::routes();
