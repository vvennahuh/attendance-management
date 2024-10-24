<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;
use App\Http\Controllers\AuthenticatedSessionController;
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

Route::get('/login', [AtteController::class, 'punch'])
    ->middleware('auth', 'verified');

Route::post('/atte', [AtteController::class, 'work'])
    ->name('work');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/attedate', [AtteController::class, 'indexDate'])
    ->name('attedate');
Route::post('/attedate', [AtteController::class, 'perDate'])
    ->name('per/date');

Route::get('/attelist', [AtteController::class, 'indexUser'])
    ->name('attelist');
Route::post('/attelist', [AtteController::class, 'perUser'])
    ->name('per/user');

Route::get('atteuser', [AtteController::class, 'user'])
    ->name('atteuser');