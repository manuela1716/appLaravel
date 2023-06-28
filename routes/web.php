<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteController;

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


Route::get('/', [CompteController::class, 'login'])->name('/');
Route::get('/register', [CompteController::class, 'register'])->name('/register');
Route::get('/home', [CompteController::class, 'home'])->name('/home')->middleware('auth');
Route::get('/logout', [CompteController::class, 'logout'])->name('/logout');

Route::post('/', [CompteController::class, 'connect'])->name('/');
Route::post('/register', [CompteController::class, 'create'])->name('/register');

