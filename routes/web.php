<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JeuxController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'homePage'])->name('home.page');
Route::get('/auth', [AuthController::class, 'showAuthPage'])->name('auth.page');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/confirm-code', [AuthController::class, 'confirmCode'])->name('confirm.code');
Route::post('/confirm', [AuthController::class, 'confirmCode'])->name('auth.confirm');
Route::post('/resend-code', [AuthController::class, 'resendCode'])->name('resend.code');




//Route::get('/jeux', [JeuxController::class, 'index'])->name('jeux.index');
//Route::post('/jeux', [JeuxController::class, 'store'])->name('jeux.store');
//
//Route::put('/jeux/{id}', [JeuxController::class, 'update'])->name('jeux.update');
//Route::delete('/jeux/{id}', [JeuxController::class, 'destroy'])->name('jeux.destroy');

Route::middleware(['auth', 'role:jeux'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/jeux', [JeuxController::class, 'index'])->name('jeux.index');
    Route::post('/jeux', [JeuxController::class, 'store'])->name('jeux.store');
    Route::put('/jeux/{id}', [JeuxController::class, 'update'])->name('jeux.update');
    Route::delete('/jeux/{id}', [JeuxController::class, 'destroy'])->name('jeux.destroy');
});


// ✅ LA SEULE route /dashboard
Route::middleware(['auth'])->get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
