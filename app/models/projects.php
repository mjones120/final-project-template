<?php

namespace app\models;

use app\core\Database;

class Projects
{
    use Database;
     protected $table = 'projects';

     public function getAllProjects() {
         $query = "select * from projects";
         return $this->findAll($query);
     }
     public function getProjectById($id) {
         $query = "select * from projects where id = $id";
         return $this->query($query, ['id' => $id]);
     }

     public function saveProject($inputData) {
         $query = "INSERT INTO $this->table (title, description) VALUES (:title, :description);";
         return $this->query($query, $inputData);
     }
     public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }
}

