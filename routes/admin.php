<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin", "namespace" => "Admin", "middleware" => ["auth"], "as" => "admin."], function () {

});

