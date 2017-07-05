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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','MainController@index');
Route::get('/add','MainController@add');
Route::get('/contact','MainController@contact');

Route::post('/save', [
	'uses' => 'MainController@save',
	'as' => 'main.save'
]);

Route::get('/delete/{car}', [
	'uses' => 'MainController@delete',
	'as' => 'main.delete'
]);

Route::post('/car/edit/editRecord/{car}', [
	'uses' => 'MainController@editRecord',
	'as' => 'main.editRecord'
]);

Route::get('/car/{car}',[
	'uses' => 'MainController@show',
	'as' => 'main.show'
]);

Route::get('/car/edit/{car}',[
	'uses' => 'MainController@edit',
	'as' => 'main.edit'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
