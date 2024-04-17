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
    public function getUserById($id) {
        $query = "selecr * from users where id = $id";
        return $this->queryWithParams($query, ['id' => $id]);
    }
    public function saveUser($inputData) {
        $query = "INSERT INTO $this->table (email, name) VALUES (:email, :name)";
        return $this->queryWithParams($query, $inputData);
    }


   

}