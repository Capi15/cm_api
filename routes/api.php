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
Route::get('nota', 'NotaController@index');
Route::get('nota/{nota}', 'NotaController@show');
Route::post('nota', 'NotaController@store');
Route::put('nota/{nota}', 'NotaController@update');
Route::delete('nota/{nota}', 'NotaController@delete');
