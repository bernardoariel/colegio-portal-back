<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('escribanos','App\Http\Controllers\escribanoController@getEscribano');
Route::get('escribano/{id}','App\Http\Controllers\escribanoController@getEscribanoId');

Route::post('addEscribano','App\Http\Controllers\escribanoController@insertEscribano');
Route::put('updateEscribano/{id}','App\Http\Controllers\escribanoController@updateEscribano');
Route::delete('deleteEscribano/{id}','App\Http\Controllers\escribanoController@deleteEscribano');
