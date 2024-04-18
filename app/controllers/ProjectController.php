<?php

namespace app\controllers;

use app\models\Projects;

class ProjectController extends Controller
{
    public function getProject()
    {
        $projects = new Projects();
        header('Content-Type: application/json');
        $projects = $projects->getAllProjects();
        $this->view('../public/assets/views/main/projects.php', ['projects' => $projects]);
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