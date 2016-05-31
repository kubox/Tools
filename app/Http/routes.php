<?php

\Route::group(['middleware' => 'auth'], function () {
    \Route::resource('admin/dashboard', 'Admin\DashboardController', ['only' => ['index']]);
    \Route::resource('admin/account', 'Admin\AccountController', ['except' => ['show']]);

    Route::get('/','Auth\AuthController@logout');
});

\Route::controller('auth', 'Auth\AuthController',
    [
        'postLogin'    => 'post.login',
        'getLogin'     => 'get.login',
    ]
);

Route::get('/', function () {
    return view('auth/login');
});