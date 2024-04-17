<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.html';
//        $this->view('../public/assets/views/main/example-homepage.php', true);
    }
    public function certs()
    {
        include '../public/assets/views/main/certs.html';
    }
    public function projects()
    {
        include '../public/assets/views/main/projects.html';
        
    }
    public function contact()
    {
        include '../public/assets/views/main/contact.html';
    
    }
    public function learn()
    {
        include '../public/assets/views/main/learn.html';
    }

    public function notFound()
    {
        include '../public/assets/views/main/404.html';
    }

}