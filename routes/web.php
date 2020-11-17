<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth:web']], function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::group(['namespace' => 'App\Http\Controllers\admins\Post'], function() {
            Route::resource('post-category','PostCategoryController');
            Route::resource('post','PostController');
        });



    });
});

