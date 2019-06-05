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

Route::get('/', function () {
    return view('index');
});



Route::get('/test', function() {
	return view('test.per');
});

Auth::routes();
//Route::get('log',)



Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        if(Auth::check())
            return view('dashboard.cap');
        else
            return redirect('/');
    });
    Route::get('/logout.html', function () {
        return view('dashboard.cap');
    });
    Route::get('/profile', function () {
        return view('dashboard.sub.profile');
    });
    Route::get('/tariff', function () {
        return view('dashboard.sub.tariff');
    });

});



