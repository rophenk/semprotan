<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/
Route::resource('/', 'SearchController@index');

Route::controllers([
    'auth'  => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
  ]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['middleware' => 'web'], function () {
  Route::resource('/', 'SearchController@index');
  Route::post('result', 'SearchController@result');
  Route::get('detail/{uuid?}', 'SearchController@show');

  Route::get('admin/home', 'AdminController@index');
  Route::resource('admin/category', 'ModulesController');
  Route::resource('admin/category.links', 'LinksController');
  Route::get('admin/register', 'AdminController@register');
  Route::resource('admin/users', 'UserController');
    
  Route::auth();

  Route::get('/home', 'HomeController@index');
});
