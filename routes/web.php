<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('/', function () {
    return redirect('/Home');
});

Route::get('/Home','App\Http\Controllers\FoodController@index');

Route::get('/Learn', function () {
    return redirect('/Home');
});
Route::get('/Train', function () {
    return redirect('/Home');
});
Route::get('/Download', function () {
    return redirect('/Home');
});
Route::get('/AboutMe', function () {
    return redirect('/Home');
});

Route::get('/Login', function () {
    return redirect('/Home');
});
Route::get('/SignUp', function () {
    return redirect('/Home');
});
Route::get('/AddDetails', function () {
    return redirect('/Home');
});
Route::get('/ResetPas', function () {
    return redirect('/Home');
});
Route::get('/Profile', function () {
    return redirect('/Home');
});
Route::get('/Chart', function () {
    return redirect('/Home');
});