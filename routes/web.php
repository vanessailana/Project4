<?php


use App\User;




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
Route::get('/update', function () {
    return view('pages.update');
});
Route::get('/adminpanel', function () {
    return view('pages.adminpanel');
});
Route::get('/guest', function () {
    return view('pages.guest');
});
Route::get('/food', function () {
    return view('pages.resturant');
});
Route::get('/email', function () {
    return view('auth.passwords.email');
});


Route::get('password/reset(array)');



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::post('/meow{id}', 'UpdatePasswordController@update');

//redirect after update
Route::get('/yay', function () {
    return view('pages.success');
});


