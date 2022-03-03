<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
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



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/register', [AdminRegisterController::class, 'create'])->name('register.create')->middleware('guest:admin');

    Route::post('/register', [AdminRegisterController::class, 'store'])->name('register')->middleware('guest:admin');

    Route::get('/login', [AdminLoginController::class, 'create'])->name('login.create')->middleware('guest:admin');

    Route::post('/login', [AdminLoginController::class, 'login'])->name('login')->middleware('guest:admin');

    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout')->middleware('auth:admin');

    Route::get('/dashboard', function(){
        return view('Admin.dashboard');
    })->name('dashboard')->middleware(['auth:admin', 'customVerify']);


    Route::get('/email/verify', function () {
        return view('Admin.Auth.verify-email');
    })->middleware('auth:admin')->name('verification.notice');


    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('admin/dashboard');
    })->middleware(['auth:admin', 'signed'])->name('verification.verify');


    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth:admin', 'throttle:6,1'])->name('verification.send');
});
