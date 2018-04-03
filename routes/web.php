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

Route::get('/', 'HomeController@index');
// Usuários, mostrar todos os recursos
Route::get('/users', 'UserController@index');
// Usuários, mostrar um recurso
Route::get('/users/{id}', 'UserController@show')
    ->where(['id' => '[0-9]+']);
// Usuários, mostrar formulário de novo recurso
Route::get('/users/new', 'UserController@create');
// Usuários, ação de inserior um novo recurso
Route::post('/users/new', 'UserController@store');
// Usuários, mostrar formulário para atualizar recurso
Route::get('/users/{id}/edit', 'UserController@edit');
// Usuários, ação de atualizar um recurso
Route::put('/users/{id}/edit', 'UserController@update');
// Usuários, ação de remover um recurso
Route::delete('/users/{id}/edit', 'UserController@destroy');

/*
|--------------------------------------------------------------------------
| Routes for Login Function
|--------------------------------------------------------------------------
*/
// Return view
Route::get('/login', 'LoginController@index');

// Login validation
Route::post('/login', 'LoginController@loginValidator');

Route::get('/dashboard', 'DashboardController@index')
    ->middleware('App\Http\Middleware\Auth');
