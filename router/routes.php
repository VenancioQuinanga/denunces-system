<?php

$routes = [
    '/home'=>'UserController@home',
    '/users/sign_up'=>'UserController@sign_up',
    '/users/login'=>'UserController@login',
    '/users/redefinir_senha'=>'UserController@resetPass',
    '/users/conta'=>'UserController@account',
    '/dashboard'=>'UserController@dashboard',
    '/denunciar'=>'UserController@denunce',
    '/teste'=>'UserController@test'
];
