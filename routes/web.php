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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/template/index', function () {
//     return view('template.index');
// });

// Route::get('/template/calandar', function () {
//     return view('template.calendar');
// });

// Route::get('/template/gallery', function () {
//     return view('template.gallery');
// });

// Route::get('/template/charts/chartsjs', function () {
//     return view('template.charts.chartsjs');
// });

// Route::get('/template/widgets', function () {
//     return view('template.widgets');
// });

// Route::get('/template/home', function () {
//     return view('template.home');
// });

// Route::get('/template/charts/flot', function () {
//     return view('template.charts.flot');
// });

// Route::get('/template/charts/inline', function () {
//     return view('template.charts.inline');
// });

// Route::get('/template/example/404', function () {
//     return view('template.example.404');
// });

// Route::get('/template/example/500', function () {
//     return view('template.example.500');
// });

// Route::get('/template/example/blank', function () {
//     return view('template.example.blank');
// });

// Route::get('/template/example/500', function () {
//     return view('template.example.500');
// });

// Route::get('/template/example/contacts', function () {
//     return view('template.example.contacts');
// });

// Route::get('/template/example/e-commerce', function () {
//     return view('template.example.commerce');
// });

// Route::get('/template/example/forgot-password', function () {
//     return view('template.example.forgot-password');
// });


Route::get('/test', 'TestController@index');
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'HomeController@index')->name('home');

    Route::middleware('can:admin')->group(function(){
        Route::get('/admin/users/index', 'Admin\UserController@index');
    });
    Route::middleware('can:user')->group(function(){
        
    });

});





