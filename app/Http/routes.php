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

Route::get('/',['uses' => 'HomeController@login', 'as' => 'home']);
Route::get('/register',['uses' => 'HomeController@register', 'as' => 'register']);
Route::get('/dashboard',['uses' => 'HomeController@dashboard', 'as' => 'dashboard']);

Route::get('/logout', ['uses' => 'Auth\AuthController@logout', 'as' => 'logout']);

Route::post('/',['uses' => 'Auth\AuthController@login', 'middleware'=>['guest']]);
Route::post('/register', ['uses' => 'Auth\AuthController@register', 'middleware'=>['guest']]);
