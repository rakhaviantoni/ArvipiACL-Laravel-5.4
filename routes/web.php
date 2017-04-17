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

Route::get('/', 'PressController@welcome');

Auth::routes();

Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    Route::resource('users', 'UserController');
  });
});

Route::get('/home', 'HomeController@index');

Route::get('/home/users', 'UserController@index');

Route::post('/home/users/changerole', 'UserController@changerole');

Route::get('/home/role', 'RoleController@index');

Route::get('/home/role/add', 'RoleController@index');

Route::post('/home/role/changepermission/press', 'RoleController@changepress');
Route::post('/home/role/changepermission/users', 'RoleController@changeusers');
Route::post('/home/role/changepermission/news', 'RoleController@changenews');
Route::post('/home/role/changepermission/payroll', 'RoleController@changepayroll');
Route::post('/home/role/changepermission/employees', 'RoleController@changeemployees');
Route::post('/home/role/changepermission/recruitment', 'RoleController@changerecruitment');
Route::post('/home/role/changepermission/marketing', 'RoleController@changemarketing');
Route::post('/home/role/changepermission/sales', 'RoleController@changesales');

Route::get('/home/news', 'NewsController@index');
Route::get('/home/news/data', 'NewsController@data');
Route::post('/home/news/store', 'NewsController@store');
Route::post('/home/news/update/{id}', 'NewsController@update');
Route::get('/home/news/delete/{id}', 'NewsController@destroy');

Route::get('/home/press', 'PressController@index');
Route::get('/home/press/data', 'PressController@data');
Route::post('/home/press/store', 'PressController@store');
Route::post('/home/press/update/{id}', 'PressController@update');
Route::get('/home/press/delete/{id}', 'PressController@destroy');

Route::get('/home/employees', 'EmployeesController@index');
Route::get('/home/employees/data', 'EmployeesController@data');
