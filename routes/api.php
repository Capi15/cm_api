<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Nota;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//a middleware permite verificar se há algum utilizador logado
Route::get('nota', 'NotaController@index')->middleware('verifyLogin');
Route::get('nota/{id}', 'NotaController@show')->middleware('verifyLogin');
Route::post('nota', 'NotaController@store')->middleware('verifyLogin');
Route::put('nota/{id}', 'NotaController@update')->middleware('verifyLogin');
Route::delete('nota/{id}', 'NotaController@delete')->middleware('verifyLogin');
Route::post('register', 'Auth\RegisterController@create');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
