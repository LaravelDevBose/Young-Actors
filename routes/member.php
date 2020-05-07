<?php

use Illuminate\Support\Facades\Route;

Route::get('member/dashboard','HomeController@member_dashboard')->name('member.dashboard');

Route::group(["prefix" => "member", "namespace" => "Member", "middleware" => ["auth"], "as" => "member."], function () {

});

