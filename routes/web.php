<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name('index');

Route::get('/order/page', 'FrontendController@payment')->name('order.page');
Route::post('/order', 'FrontendController@order')->name('order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('attachment/{attachment}/download', 'AttachmentsController@download')->name('master-attachment-download');
Route::post('attachment/{attachment}/delete', 'AttachmentsController@delete')->name('master-attachment-delete');
Route::post('/attachment-upload', 'AttachmentsController@store')->name('master-attachment-store');
