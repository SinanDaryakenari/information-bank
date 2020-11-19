<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/template/index', function () {
    return view('template.index');
});

Route::get('/template/calandar', function () {
    return view('template.calendar');
});

Route::get('/template/gallery', function () {
    return view('template.gallery');
});

Route::get('/template/charts/chartsjs', function () {
    return view('template.charts.chartsjs');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



