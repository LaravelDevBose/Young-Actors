<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', function (){
    return view('auth.admin_login');
})->name('admin.login');

Route::get('admin/dashboard','HomeController@admin_dashboard')->name('admin.dashboard');

Route::group(["prefix" => "admin", "namespace" => "Admin", "middleware" => ["auth"], "as" => "admin."], function () {

});

