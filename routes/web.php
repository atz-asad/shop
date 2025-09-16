<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [FrontendController::class, 'showShoppage']);

Route::get('admin/', [BackendController::class, 'adminshow']);
