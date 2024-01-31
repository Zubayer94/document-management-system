<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware;
use App\Http\Middleware\Authenticate;
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

Route::get('/', function () {
    return view('pages.dashboard');
});


Route::get('/login', [AuthController::class, 'index'])->name('get.login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/signup', [AuthController::class, 'signup'])->name('get.signup');
Route::post('/signup', [AuthController::class, 'postSignup'])->name('signup.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forget-password', [PasswordController::class, 'getForgetPassword'])->name('get.forget.password');
Route::post('/forget-password', [PasswordController::class, 'postForgetPassword'])->name('post.forget.password');
Route::get('/reset-password/{token}', [PasswordController::class, 'getResetPassword'])->name('get.reset.password');
Route::post('/reset-password', [PasswordController::class, 'postResetPassword'])->name('post.reset.password');