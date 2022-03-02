<?php

use App\Http\Controllers\UserAuthenticationController;
use App\Http\Controllers\UserRegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserRegisterController::class, 'create'])->name('register')->middleware('guest');

Route::post('/register', [UserRegisterController::class, 'store'])->name('register')->middleware('guest');

Route::get('/login', [UserAuthenticationController::class, 'create'])->name('login')->middleware('guest');

Route::post('/login', [UserAuthenticationController::class, 'login'])->name('login')->middleware('guest');

Route::post('/logout', [UserAuthenticationController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', function(){
    return view('User.dashboard');
})->name('dashboard')->middleware('auth');
