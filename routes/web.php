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

Route::get('/', [function () {
    return view('welcome');
}, 'as' => 'root']);
// //
// Route::get('/testRoute/{id}', function($id){
//   return view('test_route', ['name' => 'Vasya']);
// });

// Route::get('testController', 'TestController@index');

Route::resource('news', 'NewsController');
Route::resource('lessons', 'LessonsController', ['middleware' => ['auth']]);
Route::resource('cats', 'CatsController');
Route::resource('content_blocks', 'ContentBlocksController', ['middleware' => ['auth']]);
Route::resource('roles', 'RolesController', ['middleware' => ['auth']]);
Route::get('roles/{role}/toJson', 'RolesController@toJson')->name('roles.toJson');


Auth::routes();

Route::get('/home', 'HomeController@index');
