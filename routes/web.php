<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as MainController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;


Route::get('/', MainController::class);

Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, '__invoke']);

    Route::resource('categories', CategoryController::class);
    ;

});

Auth::routes();
