<?php

use app\controllers\UserController;
use app\controllers\MainController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],
    'homepage' => [
        'controller' => MainController::class,
        'GET' => 'homepage'
    ],
    'certs' => [
        'controller' => MainController::class,
        'GET' => 'certs'
    ],
    'projects' => [
        'controller' => MainController::class,
        'GET' => 'projects'
    ],
    'contact' => [
        'controller' => MainController::class,
        'GET' => 'contact',
        'POST' =>'usersAddView'
    ],
    'learn' => [
        'controller' => MainController::class,
        'GET' => 'learn'
    ],
    'submit'=> [ 
        'controller' => UserController::class,
        'POST' =>'submit'
    ],
    '404' => [
        'controller' => MainController::class,
        'GET' => 'notFound'
    ],
    '/contacts'=> [
        'controller' => UserController::class,
        'POST' => 'usersView'
    ]

];