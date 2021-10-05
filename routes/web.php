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

Route::get('/', 'App\Http\Controllers\StaticController@home')->name('home');

Route::get('/voyages', 'App\Http\Controllers\StaticController@trips')->name('voyages');

Route::get('/voyage/{id}', 'App\Http\Controllers\StaticController@trip')->name('voyage')->where('id', '[0-9]+');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
 * Route espace admin
 */

  Route::prefix('admin')->group(function () {
    Route::get('voyages', 'App\Http\Controllers\AdminVoyageController@index')->name('admin.voyages');
    Route::get('voyages/new', 'App\Http\Controllers\AdminVoyageController@create')->name('admin.voyage.create');
    Route::post('voyages/add', 'App\Http\Controllers\AdminVoyageController@store')->name('admin.voyage.store');
    Route::get('voyages/{id}/edit', 'App\Http\Controllers\AdminVoyageController@edit')->name('admin.voyage.edit')->where('id', '[0-9]+');
    Route::put('voyages/{id}/update', 'App\Http\Controllers\AdminVoyageController@update')->name('admin.voyage.update')->where('id', '[0-9]+');
    Route::delete('voyages/{id}/delete', 'App\Http\Controllers\AdminVoyageController@destroy')->name('admin.voyage.destroy')->where('id', '[0-9]+');
  });

