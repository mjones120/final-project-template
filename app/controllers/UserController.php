<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsers();
        echo json_encode($users);
        exit();
    }

    public function saveUser() {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->saveUser($_POST);
        echo json_encode($users);
        exit();

    }

    public function validateUser($inputData) {
        $errors = [];
        $name= $inputData['name'];

        if ($name) {
            $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($name) < 2) {
                $errors['nameTooShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'name' => $name,
        ];
    }

}