<?php

namespace app\models;
use app\core\Database;

class User

{
    use Database;

    protected $table = 'contacts';

    public function getAllUsers() {
        $query = "select * from users";
        return $this->fetchAll($query);
    }
    public function getUserById($id) {
        $query = "select * from users where id = $id";
        return $this->query($query, ['id' => $id]);
    }
    public function saveUser($inputData) {
        $query = "INSERT INTO $this->table (email, name) VALUES (:email, :name);";
        return $this->query($query, $inputData);
    
    }
    
   


   

}