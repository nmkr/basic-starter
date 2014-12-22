<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
    if (! Auth::check())
    {
        return Redirect::to('auth/login');
    }

    return Redirect::to('/dashboard');
});

// Authentication
Route::controller('auth', 'AuthController');
Route::controller('password', 'RemindersController');

// Auth need Areas
Route::group(array('before' => 'auth'), function()
{
    // Pages
    Route::controller('dashboard', 'DashboardController');
});
