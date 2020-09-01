<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'guest', 'namespace' => 'Dashboard'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('taraf', 'DashboardController@about')->name('dashboard.about');
    Route::post('taraf', 'DashboardController@addAbout')->name('dashboard.store');

    Route::get('show-jobs-orders/{slug?}', 'JobOrderController@index')->name('dashboard.jobs.order');

    Route::group(['prefix' => 'cv'], function() {
       Route::get('create', 'CvController@create')->name('cv.create');
       Route::get('show', 'CvController@index')->name('cv.show');
       Route::post('store', 'CvController@store')->name('cv.store');
       Route::get('edit/{id}', 'CvController@edit')->name('cv.edit');
       Route::post('update/{id}', 'CvController@update')->name('cv.update');
    });

    Route::group(['prefix' => 'news'], function () {
       Route::get('index', 'NewsController@index')->name('news.index');
       Route::get('create', 'NewsController@create')->name('news.create');
       Route::post('store', 'NewsController@store')->name('news.store');
       Route::get('edit/{id}', 'NewsController@edit')->name('news.edit');
       Route::post('update/{id}', 'NewsController@update')->name('news.update');
    });

    Route::group(['prefix' => 'slider'], function() {
       Route::get('','SliderController@index')->name('slider.index');
       Route::get('create','SliderController@create')->name('slider.create');
       Route::post('','SliderController@store')->name('slider.store');
       Route::get('edit/{id}','SliderController@edit')->name('slider.edit');
       Route::post('update/{id}','SliderController@update')->name('slider.update');
    });

    Route::group(['prefix' => 'job'], function() {
       Route::get('create-employee', 'CarrerController@create')->name('carrer.create');
       Route::post('employee', 'CarrerController@store')->name('carrer.store');
       Route::get('show-employee', 'CarrerController@show')->name('carrer.show');
       Route::get('employee/{id}', 'CarrerController@edit')->name('carrer.edit');
       Route::post('update/{id}', 'CarrerController@update')->name('carrer.update');

    });

    Route::group(['prefix' => 'country'], function() {
       Route::get('create','CountryController@country')->name('country.create');
       Route::post('','CountryController@store')->name('country.store');
       Route::get('show-country', 'CountryController@show')->name('country.show');
       Route::get('country/{id}', 'CountryController@edit')->name('country.edit');
       Route::post('update/{id}', 'CountryController@update')->name('country.update');

    });

});
