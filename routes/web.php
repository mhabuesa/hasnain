<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    // Extra Routes of Resource Controller
    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::post('/profile_password/{profile}', 'profile_password')->name('password');
    });
    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
        Route::post('/status/update/{id}', 'status_update')->name('status.update');
    });
    Route::controller(SubcategoryController::class)->name('subcategory.')->prefix('subcategory')->group(function () {
        Route::post('/status/update/{id}', 'status_update')->name('status.update');
    });
    Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function () {
        Route::post('/status/update/{id}', 'status_update')->name('status.update');
        Route::get('/get_subcategories/{category}', 'get_subcategories');
        Route::delete('/gallery/delete', 'deleteGallery')->name('gallery.delete');
    });
    Route::controller(CouponController::class)->name('coupon.')->prefix('coupon')->group(function () {
        Route::post('/status/update/{id}', 'status_update')->name('status.update');
    });
    Route::controller(BannerController::class)->name('banner.')->prefix('banner')->group(function () {
        Route::post('/status/update/{id}', 'status_update')->name('status.update');
        Route::post('/main/update', 'main_banner_update')->name('main.banner.update');
    });

    Route::controller(CustomizeController::class)->group(function(){
        // General Info
        Route::get('/general_info', 'generalInfo')->name('general.info');
        Route::post('/general_info/update', 'generalInfo_update')->name('general.info.update');

    });


    // Resource Controller
    Route::resource('/profile', ProfileController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/subcategory', SubcategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/coupon', CouponController::class);
    Route::resource('/banner', BannerController::class);
});



require __DIR__.'/auth.php';
require __DIR__.'/frontend.php';
