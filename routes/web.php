<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ProductController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ProductController::class, 'index'])
->name('Products.index');
Route::get('/product/{product}', [ProductController::class, 'show'])
->name('Pages.Products.show');
Route::get('/create', [ProductController::class, 'create'])
->name('Pages.Products.create');
Route::post('/store', [ProductController::class, 'store'])
->name('Pages.Products.store');




