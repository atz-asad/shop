<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [FrontendController::class, 'showShoppage']);





// admin route
Route::get('admin/', [BackendController::class, 'adminshow']);


Route::resource('admin/brand', BrandController::class);
