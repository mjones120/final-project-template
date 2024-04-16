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
        'GET' => 'homepage'
    ],
    'certs.html' => [
        'controller' => MainController::class,
        'GET' => 'certs'
    ],
    'projects.html' => [
        'controller' => MainController::class,
        'GET' => 'projects'
    ],
    'contact.html' => [
        'controller' => MainController::class,
        'GET' => 'contact'
    ],
    'learn.html' => [
        'controller' => MainController::class,
        'GET' => 'learn'
    ],
    'submit.html' => [
        'controller' => MainController::class,
        'GET' => 'submit'
    ]
];