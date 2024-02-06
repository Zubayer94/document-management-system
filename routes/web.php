<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

// Route::get('/', function () {
// return view('index');
// });
Route::get('/', function () {
    return view('dashboard');
    })->middleware('new-auth')->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
    })->middleware('new-auth');

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'index')->name('get.login');
    Route::post('/login', 'login')->name('post.login');
    Route::get('/signup', 'signup')->name('get.signup');
    Route::post('/signup', 'postSignup')->name('post.signup');
    Route::get('logout', 'logout')->name('logout');
});

Route::get('/forgot-password', [PasswordController::class, 'getForgotPassword'])->name('get.forgot.password');
Route::post('/forgot-password', [PasswordController::class, 'postForgotPassword'])->name('post.forgot.password');
Route::get('/reset-password/{token}', [PasswordController::class, 'getResetPassword'])->name('get.reset.password');
Route::post('/reset-password', [PasswordController::class, 'postResetPassword'])->name('post.reset.password');

Route::controller(ProfileController::class)->middleware('new-auth')->group(function (){
    Route::get('profile', 'index')->name('get.profile');
    Route::put('profile', 'store')->name('post.profile');
});

/**
 * --------------------------
 * User Access Control Flow |
 * --------------------------
 */
Route::resource('roles', RoleController::class)->except(['show']);
