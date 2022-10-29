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

Route::group(['prefix' => '',  'namespace' => 'App\Http\Controllers\User',  'middleware' => ['auth']], function () {

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'ProfileController@index')->name('profile');
        Route::post('/', 'ProfileController@update')->name('profile.update');
    });

    Route::group(['prefix' => 'pendaftaran'], function () {
        // Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('pendaftaran');
        Route::get('/{id}', 'PendaftaranController@pendaftaran')->name('pendaftaran.darah');
        Route::post('', 'PendaftaranController@store')->name('pendaftaran.store');
        Route::get('/print/darah', 'PendaftaranController@printForm')->name('pendaftaran.print');
    });
});


Route::group(['prefix' => '',  'namespace' => 'App\Http\Controllers\Admin',  'middleware' => ['admin']], function () {
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', function () {
            return redirect('admin/dashboard');
        });
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/data', 'DashboardController@data')->name('dashboard.data');

        Route::group(['prefix' => '/users'], function () {
            Route::get('/', 'UserController@index')->name('users');
            Route::get('/data', 'UserController@data')->name('users.data');
            Route::post('/store', 'UserController@store')->name('users.store');
            Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
            Route::put('/{id}', 'UserController@update')->name('users.update');
            Route::delete('/{id}', 'UserController@destroy')->name('users.delete');
        });

        Route::group(['prefix' => '/stocks'], function () {
            Route::get('/', 'StockController@index')->name('stocks');
            Route::get('/data', 'StockController@data')->name('stocks.data');
            Route::post('/store', 'StockController@store')->name('stocks.store');
            Route::get('/{id}/edit', 'StockController@edit')->name('stocks.edit');
            Route::put('/{id}', 'StockController@update')->name('stocks.update');
            Route::delete('/{id}', 'StockController@destroy')->name('stocks.delete');
            Route::get('/print/darah', 'StockController@printForm')->name('stocks.print');
        });

        Route::group(['prefix' => '/permintaans'], function () {
            Route::get('/', 'PermintaanController@index')->name('permintaans');
            Route::get('/data', 'PermintaanController@data')->name('permintaans.data');
            Route::post('/store', 'PermintaanController@store')->name('permintaans.store');
            Route::put('/{id}/approve', 'PermintaanController@approve')->name('permintaans.approve');
            Route::get('/{id}/edit', 'PermintaanController@edit')->name('permintaans.edit');
            Route::get('/print/darah', 'PermintaanController@printForm')->name('permintaans.print');
        });

        Route::group(['prefix' => '/sisas'], function () {
            Route::get('/', 'SisaController@index')->name('sisas');
            Route::get('/data', 'SisaController@data')->name('sisas.data');
            Route::post('/store', 'SisaController@store')->name('sisas.store');
            Route::get('/{id}/edit', 'SisaController@edit')->name('sisas.edit');
            Route::put('/{id}', 'SisaController@update')->name('sisas.update');
            Route::delete('/{id}', 'SisaController@destroy')->name('sisas.delete');
        });

        Route::group(['prefix' => '/settings'], function () {
            Route::get('/', 'SettingController@index')->name('settings');
            Route::put('/', 'SettingController@update')->name('settings.update');
            Route::put('/pass', 'SettingController@pass')->name('settings.pass');
        });
    });
});

require __DIR__ . '/auth.php';
