<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as MainController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;


Route::get('/', MainController::class);

Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, '__invoke'])->name("admin.home");
    Route::resource('category', CategoryController::class)->names("admin.category");

    //Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    //Route::get('/category')
    //Route::prefix('category')->group(function() {
    //    Route::get('/create', [CategoryController::class, 'create'])->name("admin.category.create");
    //});
    //Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    //Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    ;

});

Auth::routes();
