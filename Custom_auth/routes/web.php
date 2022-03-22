<?php

use App\Http\Controllers\UserAuthenticationController;
use App\Http\Controllers\UserPasswordResetController;
use App\Http\Controllers\UserRegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/register', [UserRegisterController::class, 'create'])->name('register.create')->middleware('guest:web');

Route::post('/register', [UserRegisterController::class, 'store'])->name('register')->middleware('guest:web');

Route::get('/login', [UserAuthenticationController::class, 'create'])->name('login.create')->middleware('guest:web');

Route::post('/login', [UserAuthenticationController::class, 'login'])->name('login')->middleware('guest:web');

Route::post('/logout', [UserAuthenticationController::class, 'logout'])->name('logout')->middleware('auth:web');

Route::get('/dashboard', function(){
    return view('User.dashboard');
})->name('dashboard')->middleware(['auth:web', 'verified']);


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

// Password reset//

Route::get('/forgot-password', [UserPasswordResetController::class, 'create'])->middleware('guest')->name('password.request');

Route::post('/forgot-password', [UserPasswordResetController::class, 'store'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [UserPasswordResetController::class, 'newPassowrdCreate'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', [UserPasswordResetController::class, 'newPasswordStore'])->middleware('guest')->name('password.update');


// Authorigation---//
Route::get('category', function(){
    $categories = Category::get();
    return view('User.pages.category', compact('categories'));
})->name('user.category');

Route::get('category/create', function(){
    return view('User.pages.create');
})->name('category.create');

Route::post('category/create', function(Request $request){
    $request->validate([
        'name' => ['required']
    ]);
    Category::create([
        'user_id' => auth()->user()->id,
        'name' => $request->name
    ]);
    return redirect()->route('user.category');
})->name('category.store');

Route::get('category/view/{category}', function(Category $category){
    return view('User.pages.view', compact('category'));
})->name('category.view');

Route::get('category/edit/{category}', function(Category $category){
    return view('User.pages.edit', compact('category'));
})->name('category.edit');

Route::post('category/update/{category}', function(Request $request, Category $category){
    $request->validate([
        'name' => ['required']
    ]);
    $category->update([
        'user_id' => auth()->user()->id,
        'name' => $request->name
    ]);
    return redirect()->route('user.category');
})->name('category.update');
