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
    return view('Frontend.index');
});

Route::get('/event', function () {
    return view('Frontend.event');
});

Route::get('/about-us', function () {
    return view('Frontend.about');
});

Route::get('/contact', function () {
    return view('Frontend.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function () {
//     return view('Backend.Admin.index');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('Backend.Admin.index');
    });
    Route::get('/artikel', 'ArtikelController@index');
    Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
    Route::post('/artikel-store', 'ArtikelController@store');
    Route::get('/kategori','KategoriController@index');
    Route::post('/kategori-store', 'KategoriController@store');
    Route::get('/kategori/{id}/edit', 'KategoriController@edit');

});
