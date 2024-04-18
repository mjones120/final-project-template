<?php

use app\controllers\UserController;
use app\controllers\MainController;

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
        'controller' => MainController::class,
        'GET' => 'projects'
    ],
    'contact' => [
        'controller' => UserController::class,
        'GET' => 'contact',
        'POST' => 'saveUser'
    ],
    'submit'=> [ 
        'controller' => UserController::class,
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