<?php

use App\Models\Slider;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeCookieRedirect']], function () {

    Route::group(['namespace' => 'Site'], function() {
        Route::get('/', 'HomePageController@index')->name('site.index');
        Route::get('/about', 'HomePageController@about')->name('site.about');
        Route::get('/cv', 'HomePageController@cv')->name('site.cv');
        Route::get('/services', 'HomePageController@service')->name('site.service');
        Route::get('/order', 'HomePageController@order')->name('site.order');
        Route::get('/search', 'HomePageController@search')->name('site.search');

        Route::post('store', 'OrderController@store')->name('order.store');

        Route::post('get-cv', 'CvController@getCv')->name('cv.search');

    });

});

view()->share('slider', Slider::all());
view()->share('jobs', \App\Models\Carrer::all());
view()->share('countries', \App\Models\Country::all());
