<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
   Route::get('/', IndexController::class);
});

Auth::routes();
