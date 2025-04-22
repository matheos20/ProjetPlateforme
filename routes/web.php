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
});


Route::get('/auth', [AuthController::class, 'showAuthPage'])->name('auth.page');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/confirm-code', [AuthController::class, 'confirmCode'])->name('confirm.code');
Route::post('/confirm', [AuthController::class, 'confirmCode'])->name('auth.confirm');
Route::post('/resend-code', [AuthController::class, 'resendCode'])->name('resend.code');

// ✅ LA SEULE route /dashboard
Route::middleware(['auth'])->get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
