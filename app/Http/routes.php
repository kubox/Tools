<?php

Route::get('/', function () {
    return view('auth/login');
});

\Route::controller('auth', 'Auth\AuthController',
    [
        'postLogin'    => 'post.login',
        'getLogin'     => 'get.login',
        'getLogout'    => 'get.logout',
        'getRegister'  => 'get.register',
        'postRegister' => 'post.register'
    ]
);

\Route::group(['middleware' => 'auth'], function () {
    \Route::resource('admin/dashboard', 'Admin\DashboardController', ['only' => ['index']]);
});