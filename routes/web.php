<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::prefix('products')->controller(ProductController::class)->group(function (){

    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/store','store');
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}','update');
    Route::delete('/delete/{id}','delete');
    Route::get('/show/{id}','show');

});
