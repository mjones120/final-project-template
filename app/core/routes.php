<?php

use app\controllers\UserController;
use app\controllers\MainController;
use app\controllers\ProjectController;

$routes = [

    'homepage' => [
        'controller' => MainController::class,
        'GET' => 'homepage'
    ],
    'certs' => [
        'controller' => MainController::class,
        'GET' => 'certs'
    ],
    'projects' => [
        'controller' => ProjectController::class,
        'GET' => 'projects',
        'PUT'=> 'GetProject'
    ],
    'contact' => [
        'controller' => UserController::class,
        'GET' => 'contact',
        'POST' => 'saveUser'
    ],
    'submit'=> [ 
        'controller' => UserController::class,
        'GET' => 'submit',
        'POST' => 'saveUser'
    ],
    'learn' => [
        'controller' => MainController::class,
        'GET' => 'learn'
    ],
    '404' => [
        'controller' => MainController::class,
        'GET' => 'notFound'
    ]
];