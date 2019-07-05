<?php

use Illuminate\Support\Facades\Route;
//URL::forceScheme('https');

// Rotas para o site
Route::GROUP(['prefix' => '/'], function () {
    Route::RESOURCE('', 'Frontend\HomeController')->only('index')->names(['index' => 'home']);
    Route::GET('newsletter', 'Frontend\HomeController@sendNewsletter')->name('sendNewsletter')->httpsOnly();

    Route::RESOURCE('login', 'Auth\LoginController')->only('index')->names(['index' => 'login']);
    Route::RESOURCE('register', 'Auth\RegisterController')->only('index')->names(['index' => 'register']);
});

Route::GROUP(['prefix' => '/partner'], function () {
    Route::RESOURCE('', 'Frontend\PartnerController')->only('index')->names(['index' => 'partner']);
    Route::GET('/contact', 'Frontend\PartnerController@sendContact')->name('sendContact')->httpsOnly();
});