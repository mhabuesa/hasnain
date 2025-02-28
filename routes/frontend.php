<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/product_details/{slug}', 'product_details')->name('product.details');
});
