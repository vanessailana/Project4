<?php


use App\User;




Auth::routes();


Route::get('/', function () {
    return view('pages.guest');
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

Route::get('/email', function () {
    return view('auth.passwords.email');
});


Route::get('password/reset(array)');



Route::get('/home', 'HomeController@index');




Route::post('user/meow{id}', 'UpdatePasswordController@update');



Route::get('/food', function () {
    return view('pages.resturant');
});

Route::get('admin/rest', 'ResturantController@store');

//redirect after update
Route::get('/yay', function () {
    return view('pages.success');
});

Route::get('food/yayfood', function () {
    return view('pages.success_resturant');
});

Route::get('/foodinfo', function () {
    return view('pages.resturant_info');
});
Route::get('/bestplaces', function () {
    return view('pages.details');
});


Route::get('/la', 'HomeController@show');

Route::get('/users','UserController@show');

Route::get('/test{id}','UserController@update');



Route::get('/detail','ResturantController@showDetail');




Route::get('/info{id}','ResturantController@details');


Route::get('/fuck','OperatingTimes@test');



Route::get('/i','ResturantController@storetimes');


Route::get('/times', function () {
    return view('pages.times');
});



Route::get('/done', function () {
    return view('pages.successoperating');
});




Route::get('/i{id}','ResturantController@combine');



Route::get('/good', function () {
    return view('pages.successfood');
});



Route::get('/add_menu_items', function () {
    return view('pages.add_menu');
});







Route::get('/o','ResturantController@insert');




Route::get('/toeat{name}','ResturantController@show');






















