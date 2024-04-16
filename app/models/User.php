<?php

namespace app\models;
use app\core\Model;
use app\core\Database;

class User

{
    use Database;

    protected $table = 'contacts';

    public function getAllUsers() {
        return $this->findAll();
    }
    public function saveUser() {
        $query = "INSERT INTO $this->table (email, name) VALUES (:email, :name)";
        $data = [
            ':email' => $_POST['email'],
            ':name' => $_POST['name']
        ];
        return $this->query($query, $data);
    }
   

}