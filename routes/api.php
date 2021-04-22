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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List users
Route::get('usersd','App\Http\Controllers\userdController@index');

//List single user
Route::get('userd/{id}','App\Http\Controllers\userdController@show');

//Create new user
Route::post('userd','App\Http\Controllers\userdController@store');

//Update user
Route::put('userd','App\Http\Controllers\userdController@update');