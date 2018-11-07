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

Route::get('/{string}', 'LinkController@getHome')->name('home');

Route::get('/t/2612410', 'LinkController@addLink')->name('add');
Route::post('/t/2612410', 'LinkController@postaddLink')->name('postadd');
