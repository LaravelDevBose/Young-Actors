<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', function (){
    return view('auth.admin_login');
})->name('admin.login');

Route::get('admin/dashboard','HomeController@admin_dashboard')->name('admin.dashboard');

Route::group(["prefix" => "admin", "namespace" => "Admin", "middleware" => ["auth"], "as" => "admin."], function () {

    Route::group(["prefix" => "schedule", "as" => "schedule."], function () {
        Route::get('/', 'ScheduleInfoController@index')->name('index');
        Route::post('/store', 'ScheduleInfoController@store')->name('store');
        Route::get('/{id}/edit', 'ScheduleInfoController@edit')->name('edit');
        Route::put('/{id}/update', 'ScheduleInfoController@update')->name('update');
        Route::get('/{id}/delete', 'ScheduleInfoController@destroy')->name('delete');
    });
    Route::get('schedule_list', 'ScheduleInfoController@list')->name('list');

    Route::group(["prefix" => "training/video", "as" => "training_video."], function () {
        Route::get('/', 'TrainingVideoController@index')->name('index');
        Route::post('/store', 'TrainingVideoController@store')->name('store');
        Route::get('/{id}/edit', 'TrainingVideoController@edit')->name('edit');
        Route::put('/{id}/update', 'TrainingVideoController@update')->name('update');
        Route::get('/{id}/delete', 'TrainingVideoController@destroy')->name('delete');
    });

    Route::group(["prefix" => "notification", "as" => "notify."], function () {
        Route::get('/', 'NotificationController@index')->name('index');

        Route::get('/email/create', 'NotificationController@email_notify_create_page')->name('email.page');
        Route::get('/sms/create', 'NotificationController@sms_create')->name('sms.page');

        Route::post('/store', 'NotificationController@notify_store')->name('store');

        Route::get('/{id}/delete', 'NotificationController@destroy')->name('delete');
    });

    Route::group(["prefix" => "member", "as" => "member."], function () {
        Route::get('/', 'MemberController@index')->name('index');
    });

    Route::group(["prefix" => "setting", "as" => "setting."], function () {
        Route::get('/', 'SettingController@setting_page')->name('page');
        Route::post('/class_url', 'SettingController@update_class_url')->name('class_url');
    });


});

