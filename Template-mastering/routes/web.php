<?php

use App\Http\Controllers\CategoryController;
use App\Models\Product;
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
    return view('Backend.index');
});

Route::resource('/category', CategoryController::class);

Route::get('/scope', function(){

    // for($i = 0; $i < 100; $i ++){
    //     Product::create([
    //         'name' => 'biplob' . '_' . $i,
    //         'slug' => 'biplob' . '_' . $i,
    //         'price' => rand(2,99),
    //         'view' => rand(2, 99)
    //     ]);
    // }

    Product::create([
        'name' => 'biplob',
        'slug' => 'biplob',
        'price' => rand(2,99),
        'view' => rand(2, 99)
    ]);

    return Product::get()->count();
});

