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



// // Display a task
// Route::get('/register',function(){
// 	return view('register');
// });

Route::get('/register', 'UserController@index');
<<<<<<< HEAD
Route::post('/register', 'UserController@create');
=======
Route::post('/register', array('user'->'UserController@create'));
>>>>>>> cb8dbdcfe740fede221b5e4d8f69dc4370adf28a
Route::get('/home', 'HomeController@index');
// Route::get('/', function () {
//     return view('welcome');
// });
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

// Route::group(['middleware' => ['web']], function () {
//     //
// });
