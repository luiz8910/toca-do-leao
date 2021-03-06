<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CustomerController@payBox');

Route::post('customer/show/{code}', 'CustomerController@show');

Route::post('customer/addCredit/{id}-{money}', 'CustomerController@addCredit');

Route::get('cliente', 'ProductController@index');

Route::post('product/show/{code}', 'ProductController@show');

Route::post('customer/sell/{id}-{total}', 'CustomerController@sell');