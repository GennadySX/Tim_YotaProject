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

function check() {
    if (!Auth::check()){
        return redirect('/');
    }
}

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
        check();
            return view('dashboard.cap');

    });
    Route::get('/logout.html', function () {
        check();
        return view('dashboard.cap');

    });
    Route::get('/profile', function () {
        check();
        return view('dashboard.sub.profile');
    });
    Route::get('/tariff', function () {
        check();
        return view('dashboard.sub.tariff');
    });
    Route::get('/tariff/control', function () {
        check();
        return view('dashboard.sub.control_tariff');
    });
    Route::any('/tariff/control', 'TariffCreate@run');
    Route::post('/tariff/del', 'TariffCreate@del');
});



