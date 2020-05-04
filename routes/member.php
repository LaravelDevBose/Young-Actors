<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "member", "namespace" => "Member", "middleware" => ["auth"], "as" => "member."], function () {

});

