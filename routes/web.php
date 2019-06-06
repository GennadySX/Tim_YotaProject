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



Route::prefix('/dashboard')->group(function () {

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

    Route::get('/my_tariff', function () {
        check();
        return view('dashboard.sub.my_tariff');
    });

    Route::get('/tariff/control', function () {
        check();
        return view('dashboard.sub.control_tariff');
    });

    Route::get('/shops/kzn', function () {
        check();
        return view('dashboard.sub.shops',  ['id' => 'Казань']);
    });
    Route::get('/shops/spb', function () {
        check();
        return view('dashboard.sub.shops',  ['id' => 'Санкт-петербург']);
    });
    Route::get('/shops/msk', function () {
        check();
        return view('dashboard.sub.shops',  ['id' => 'Москва']);
    });
    Route::get('/stock', function () {
        check();
        return view('dashboard.sub.stock');
    });

    Route::get('/stock/control', function () {
        check();
        return view('dashboard.sub.control_stock');
    });

    Route::get('/employees/control', function () {
        check();
        return view('dashboard.sub.control_employees');
    });
    Route::get('/employees/admin', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '3']);
    });
    Route::get('/employees/manager', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '6']);
    });
    Route::get('/employees/secretary', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '5']);
    });
    Route::get('/employees/directorShop', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '4']);
    });
    Route::get('/employees/operator', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '7']);
    });
    Route::get('/employees/seller', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '9']);
    });
    Route::get('/employees/master', function () {
        check();
        return view('dashboard.sub.employees',  ['id' => '8']);
    });
    /********Post Requests**********/
    Route::post('/tariff/control', 'TariffCreate@run');
    Route::post('/tariff/del', 'TariffCreate@del');
    Route::post('/tariff/connect', 'TariffCreate@connect');
    Route::post('/shops/del', 'ShopControle@del');
    Route::post('/stock/del', 'StockControle@del');
    Route::post('/stock/control', 'StockControle@run');
    Route::post('/employees/del', 'StockControle@del');
});


Route::post('/dashboard/profile/update', 'UserUpdate@update');
