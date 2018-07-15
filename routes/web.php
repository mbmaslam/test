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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('URL','Controller@Action');
Route::get('/welcome','WelcomeController@index');

Route::get('/welcome/blade','WelcomeController@blade');

Route::get('/welcome/bcas','WelcomeController@bcas');


//sample Bootsrap page creatation
//Route CMS pages
Route::get('/','IndexController@index');
Route::get('/about/us','IndexController@about');
Route::get('/services','IndexController@service');
Route::get('/contact','IndexController@contact');


//create the Route in From (CRUD)
Route::get('/departments','Department\DepartmentController@index');
Route::get('/departments/create','Department\DepartmentController@create');
Route::post('/departments/store','Department\DepartmentController@store');
Route::get('/departments/edit/{deptno}','Department\DepartmentController@edit');
Route::post('/departments/update','Department\DepartmentController@update');
Route::get('/departments/delete/{deptno}','Department\DepartmentController@delete');