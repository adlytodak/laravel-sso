<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'AdlyTodak\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'AdlyTodak\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'AdlyTodak\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'AdlyTodak\LaravelSSO\Controllers\ServerController@userInfo');
});
