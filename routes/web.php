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

// Route::get('/', function () {
//     return view('landingpage.content');
// });

Route::get('/', function() {
    return view('landingpage.content');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::get('/ceritamu', function () {
        return view('ceritamu.ceritamu');
    });
    Route::get('/ceritamu/post', function() {
        return view('ceritamu.postceritamu');
    });
});

Route::group([], function () {
    Route::get('/lapor', function () {
        return view('lapor.lapor');
    });
});

Route::group([], function () {
    Route::get('/login', function () {
        return view('loginpage.login');
    });
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
    Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

    Route::get('/signup', function () {
        return view('loginpage.signup');
    });
});