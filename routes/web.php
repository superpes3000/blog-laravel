<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as MainController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;


Route::get('/', MainController::class);

Route::prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, '__invoke'])->name("admin.home");
    Route::resource('category', CategoryController::class)->names("admin.category");
    Route::resource('tag', TagController::class)->names("admin.tag");
    Route::resource('post', PostController::class)->names("admin.post");


    /*Route::prefix('tag')->group(function() {
        Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
        Route::get('/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
        Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
        Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('admin.tag.destroy');
    });
    */


});

Auth::routes();
