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
    'homepage.html' => [
        'controller' => MainController::class,
        'GET' => 'homepage.html'
    ],
    'certs.html' => [
        'controller' => MainController::class,
        'GET' => 'certs.html'
    ],
    'projects.html' => [
        'controller' => MainController::class,
        'GET' => 'projects.html'
    ],
    'contact.html' => [
        'controller' => MainController::class,
        'GET' => 'contact.html'
    ],
    'learn.html' => [
        'controller' => MainController::class,
        'GET' => 'learn.html'
    ]
];