<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', function (){
    return view('auth.admin_login');
})->name('admin.login');

Route::get('admin/dashboard','HomeController@admin_dashboard')->name('admin.dashboard');

Route::group(["prefix" => "admin", "namespace" => "Admin", "middleware" => ["auth"], "as" => "admin."], function () {

    Route::group(["prefix" => "class/room", "as" => "class_room."], function () {
        Route::get('/schedule', 'ClassRoomController@index')->name('schedule');
        Route::get('/publish', 'ClassRoomController@create')->name('publish');
    });

    Route::group(["prefix" => "training/room/video", "as" => "training_room."], function () {
        Route::get('/list', 'TrainingRoomController@index')->name('index');
        Route::get('/create', 'TrainingRoomController@create')->name('create');
    });

    Route::group(["prefix" => "member", "as" => "member."], function () {
        Route::get('/list', 'MemberController@index')->name('index');
        Route::get('/create', 'MemberController@create')->name('create');
    });

    Route::group(["prefix" => "setting", "as" => "setting."], function () {
        Route::get('/', 'SettingController@setting_page')->name('page');
        Route::get('/create', 'MemberController@create')->name('create');
    });


});

