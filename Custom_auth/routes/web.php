<?php

use App\Http\Controllers\UserAuthenticationController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
})->name('dashboard')->middleware(['auth', 'verified']);


Route::get('/email/verify', function () {
    return view('User.Auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
