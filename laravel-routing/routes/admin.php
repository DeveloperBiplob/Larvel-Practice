<<?php

use App\Http\Controllers\TestController;
use Illuminate\support\Facades\Route;

Route::get('/something/{name}', function($name){
    return 'Hello ! I am ' . $name;
});

Route::fallback(function(){
    return view('Errors.404');
});

Route::get('controller', [TestController::class, 'index']);
