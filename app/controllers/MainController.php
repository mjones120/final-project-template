<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.html';
                $this->view('../public/assets/views/main/example-homepage.html', true);
//        $this->view('../public/assets/views/main/example-homepage.php', true);
    }
    public function certs()
    {
        include '../public/assets/views/main/certs.html';
        $this->view('../public/assets/views/main/example-certs.html', true);
    }
    public function projects()
    {
        include '../public/assets/views/main/projects.html';
        $this->view('../public/assets/views/main/example-projects.html', true);
    }
    public function contact()
    {
        include '../public/assets/views/main/contact.html';
        $this->view('../public/assets/views/main/example-contact.html', true);
    }
    public function learn()
    {
        include '../public/assets/views/main/learn.html';
        $this->view('../public/assets/views/main/example-learn.html', true);
    }
    

    public function notFound()
    {
        $this->view('../public/assets/views/main/404.html', true);
    }

}