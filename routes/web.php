<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->middleware('auth:api');
Route::post('/refresh', 'AuthController@refresh')->middleware('auth:api');
Route::get('/user', 'AuthController@user')->middleware('auth:api');
