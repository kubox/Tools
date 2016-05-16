<?php

Route::get('/', function () {
    return view('auth/login');
});

\Route::controller('auth', 'Auth\AuthController',
    [
        'postLogin'    => 'post.login',
        'getLogin'     => 'get.login',
    ]
);

\Route::group(['middleware' => 'auth'], function () {
    \Route::resource('admin/dashboard', 'Admin\DashboardController', ['only' => ['index']]);

    \Route::resource('admin/account', 'Admin\AccountController', ['except' => ['show']]);
});