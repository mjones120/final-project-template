<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Projects;

class ProjectController extends Controller
{
    public function getProject()
    {
        $projects = new Projects();
        header('Content-Type: application/json');
        $projects = $projects->getAllProjects();
        echo json_encode($projects);
        exit();
    }
    public function getProjectById($id)
    {
        $projects = new Projects();
        header('Content-Type: application/json');
        $projects = $projects->getProjectById($id);
    }

    public function saveProject($inputData)
    {
        $projects = new Projects();
        header('Content-Type: application/json');
        $projects = $projects->saveProject($inputData);
    }

 
    public function projects()
    {
        include '../public/assets/views/main/projects.html';  
    }

}