<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'Source\Manage\Controllers\Front\FrontController@index'
]);
Route::get('/detail', [
    'as' => 'detail',
    'uses' => 'Source\Manage\Controllers\Front\FrontController@detail'
]);