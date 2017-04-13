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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','Home@index');
Route::get('/products','Home@products');
Route::get('/contact_us','Home@contact_us');
Route::get('/news','Home@news');
Route::get('/about_us','Home@about_us');
Route::get('/admin_login','Home@admin_login');
Route::post('/authenticate','Home@authenticate');
Route::get('/access_denied','Home@access_denied');

Route::get('/users/home','User@home');
Route::get('/users','User@index');
Route::get('/users/new','User@new_user');
Route::post('/users/create','User@create');
Route::get('/users/search','User@search');
Route::get('/users/search_results','User@search_results');
