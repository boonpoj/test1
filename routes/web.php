<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $name = "Ton";
    $cars = array("Volvo", "BMW", "Toyota");
    return view('about',[
        'name' => $name,
        'cars' => $cars
    ]);
});

Route::get('/product','ProductController@index');
Route::get('/home', 'HomeController@index');
Route::resource('/panda', 'PandaController');
Route::resource('/typefood', 'TypeFoodController');
Route::get('/typefood/show/{id}','TypeFoodController@show');
Route::get('/typefood/insert','TypeFoodController@insert');


Auth::routes();


