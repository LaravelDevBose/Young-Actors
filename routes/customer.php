<?php

use Illuminate\Support\Facades\Route;

Route::get('customer/dashboard','HomeController@customer_dashboard')->name('customer.dashboard');

Route::group(["prefix" => "user", "namespace" => "Customer", "middleware" => ["auth"], "as" => "user."], function () {

    Route::group(["prefix" => "game", "as" => "game."], function () {
        Route::get('/list', 'GameController@index')->name('index');
        Route::get('/{gameId}', 'GameController@show')->name('show');
        Route::post('/{gameId}/start', 'GameController@start_game')->name('start');
    });

    Route::group(["prefix" => "post", "as" => "post."], function () {
        Route::get('/list', 'PostController@index')->name('index');
        Route::post('/store', 'PostController@store')->name('store');
        Route::get('/like/{postId}', 'PostController@create')->name('like');
    });
    Route::group(["prefix" => "profile", "as" => "profile."], function () {
        Route::get('/', 'ProfileController@index')->name('index');
        Route::get('/password', 'ProfileController@password_update')->name('password');
        Route::post('/image', 'ProfileController@image_update')->name('image');
    });

});
