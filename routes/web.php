<?php

use App\Http\Controllers\zayavkiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/form', [zayavkiController::class, 'viewform'])->name('form');
Route::post('/creatzauvki',[zayavkiController::class, 'otpravkazayvki'])->name('creatzaz');
Route::get('/zayvki',[zayavkiController::class, 'viewZayavki'])->name('index');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
