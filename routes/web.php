<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/loginpost', [AuthController::class, 'loginpost'])->name('login.post');

Route::post('/registrationpost', [AuthController::class, 'registrationpost'])->name('registration.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

