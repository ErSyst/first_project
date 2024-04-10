<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'aaaaaaaaaaaaa';
});
Route::get('my_page','App\Http\Controllers\MyPlaceController@index');
Route::get('my_music','App\Http\Controllers\MyPlaceController@music');
Route::get('my_town','App\Http\Controllers\MyPlaceController@town');
Route::get('my_cat','App\Http\Controllers\MyPlaceController@cat');
