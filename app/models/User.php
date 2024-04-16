<?php

namespace app\models;
use app\core\Model;

class User

{
    use Database;

    protected $table = 'contacts';

    public function getAllUsers() {
        return $this->findAll();
    }
    public function saveUser($data) {
        return $this->save($data);
    }
   

}