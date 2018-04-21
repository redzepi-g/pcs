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

Route::get('/', [
    'uses' => 'BaseController@index',
    'as' => 'index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/MyTeams', [
    'uses' => 'BaseController@myTeams',
    'as' => 'myteams'
]);

Route::get('/TeamCalendar', [
    'uses' => 'BaseController@teamCalendar',
    'as' => 'teamCalendar'
]);

