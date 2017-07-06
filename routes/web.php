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
Route::get('/czesci','MainController@czesci');
Route::get('/add','MainController@add');
Route::get('/addCzesc','MainController@addCzesc');
Route::get('/contact','MainController@contact');

Route::post('/save', [
	'uses' => 'MainController@save',
	'as' => 'main.save'
]);

Route::post('/saveCzesc', [
	'uses' => 'MainController@saveCzesc',
	'as' => 'main.saveCzesc'
]);

Route::post('/save/saveFail', [
	'uses' => 'MainController@saveFail',
	'as' => 'main.saveFail'
]);

Route::post('/save/saveCzescFail', [
	'uses' => 'MainController@saveCzescFail',
	'as' => 'main.saveCzescFail'
]);

Route::post('/saveCzesc/saveCzescFail', [
	'uses' => 'MainController@saveFail',
	'as' => 'main.saveFail'
]);

Route::post('/saveCzesc', [
	'uses' => 'MainController@saveCzesc',
	'as' => 'main.saveCzesc'
]);
Route::get('/czesci/editCzesc/{czesc}',[
	'uses' => 'MainController@editCzesc',
	'as' => 'main.editCzesc'
]);

Route::post('/czesci/editCzesc/editCzescSuccess/{czesc}', [
	'uses' => 'MainController@editCzescSuccess',
	'as' => 'main.editCzescSuccess'
]);

Route::post('/czesci/editCzesc/editCzescSuccess/falseEditCzesci/{czesc}', [
	'uses' => 'MainController@falseEditCzesci',
	'as' => 'main.falseEditCzesci'
]);

Route::get('/car/edit/{car}',[
	'uses' => 'MainController@edit',
	'as' => 'main.edit'
]);

Route::get('/delete/{car}', [
	'uses' => 'MainController@delete',
	'as' => 'main.delete'
]);

Route::get('/deleteCzesc/{czesc}', [
	'uses' => 'MainController@deleteCzesc',
	'as' => 'main.deleteCzesc'
]);

Route::get('/search', [
	'uses' => 'MainController@search',
	'as' => 'main.search'
]);

Route::post('/search/searchSuccess', [
	'uses' => 'MainController@searchSuccess',
	'as' => 'main.searchSuccess'
]);

Route::post('/car/edit/editRecord/{car}', [
	'uses' => 'MainController@editRecord',
	'as' => 'main.editRecord'
]);

Route::post('/car/edit/editRecord/falseEdit/{car}', [
	'uses' => 'MainController@falseEdit',
	'as' => 'main.falseEdit'
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
