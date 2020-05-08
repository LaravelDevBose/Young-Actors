<?php

use Illuminate\Support\Facades\Route;

Route::get('member/dashboard','HomeController@member_dashboard')->name('member.dashboard');

Route::group(["prefix" => "member", "namespace" => "Member", "middleware" => ["auth"], "as" => "member."], function () {
        Route::get('profile/page', 'MemberController@profile_page')->name('profile.page');
        Route::post('details/update', 'MemberController@details_update')->name('details.update');
        Route::post('password/update', 'MemberController@password_update')->name('password.update');
        Route::get('live/class-room', 'MemberController@live_class_room_page')->name('class.room');
        Route::get('training/room', 'MemberController@training_room_page')->name('training.room');
});

