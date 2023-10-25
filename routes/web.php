<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Pengguna\PenggunaController;
use App\Http\Controllers\Psikiater\PsikiaterController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PenggunaMiddleware;
use App\Http\Middleware\PsikiaterMiddleware;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/{user}', [AuthController::class, 'LoginAction'])->name('login-action');

Route::get('/register', [AuthController::class, 'Register']);
Route::post('/register', [AuthController::class, 'RegisterAction'])->name('register-action');

Route::middleware(PenggunaMiddleware::class)->group(function () {
    Route::get('/pengguna', [PenggunaController::class, 'Pengguna']);
});

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'Admin']);
});

Route::middleware(PsikiaterMiddleware::class)->group(function () {
    Route::get('/psikiater', [PsikiaterController::class, 'Psikiater']);
});
