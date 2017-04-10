<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/welcomeugly', function () {
    return view('pages.welcomeugly');
});

Route::get('/myprofile', function () {
    return view('pages.profile');
});


Route::get('/adminhome', function () {
    return view('pages.adminhome');
});


