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
        'POST' =>'contact'
    ],
    'learn' => [
        'controller' => MainController::class,
        'GET' => 'learn'
    ],
    '404' => [
        'controller' => MainController::class,
        'GET' => 'notFound'
    ],
    

];