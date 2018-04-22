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

//OUTLOOK
Route::get('/signin-{id}', [
    'uses' => 'OutlookAuthController@signin',
    'as' => 'outlook-sign-in'
]);

Route::get('home/authorize', 'OutlookAuthController@gettoken');


Route::get('home/calendar', 'OutlookController@calendar')->name('calendar');

Route::post('home/storeEvents', [
    'uses' => 'OutlookController@storeEvents',
    'as' => 'store-events'
]);
//OUTLOOK END

Route::get('/', [
    'uses' => 'BaseController@index',
    'as' => 'index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * NAV ROUTES 
 */
Route::get('/my-teams-{id}', [
    'uses' => 'BaseController@myTeams',
    'as' => 'myteams'
]);

Route::get('/team-calendar-{id}', [
    'uses' => 'BaseController@teamCalendar',
    'as' => 'teamcalendar'
]);

Route::get('/tc-{id}-{month}-{day}',[
    'uses' => 'BaseController@getCalendarDay',
    'as' => 'get-calendar-day'
]);

//Dummy redirect calendar day
Route::get('/redirect-{id}-{month}-{day}',[

    'uses' => 'BaseController@getCalendarDayRedirect',
    'as' => 'get-calendar-day-redirect'
]);

//Create task in calendar
Route::post('/task-create', [
    'uses' => 'BaseController@createTask',
    'as' => 'create-task'
]);

Route::get('/delete-task-{id}',[
    'uses' => 'BaseController@deleteTask',
    'as' => 'delete-task'
]);

Route::get('/move-task-{id}-{day}',[
    'uses' => 'BaseController@moveTask',
    'as' => 'move-task'
]);

