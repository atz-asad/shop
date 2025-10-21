<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [FrontendController::class, 'showShoppage']);



// admin route
Route::get('admin/', [BackendController::class, 'adminshow']);


Route::resource('admin/brand', BrandController::class);
Route::resource('admin/tag', TagController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/product', ProductController::class);
Route::resource('admin/gallery', GalleryController::class);
