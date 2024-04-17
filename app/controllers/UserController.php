<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
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
    public function getUsers($id)
    {
        $userModel = new User();
        header("Content-Type: application/json");
        if($id){
            $user = $userModel->getUserById($id);

        }
        else{
                    $users = $userModel->getAllUsers();
            }
        echo json_encode($users);
        exit();
    }

    public function saveUser() {
        $inputData=
        [
            'email' => $_POST['email'] ? $_POST['email']: false,
            'name' => $_POST['name'] ? $_POST['name']: false,
        ];
        $userData = $this->validateUser($inputData);

        $user = new User();
        $user-> saveUser([
            'email' => $userData['email'],
            'name' => $userData['name'],
        ]);
        http_response_code(200);
        echo json_encode([
            'success'=> true
        ]);
        exit();
    }
       
       

        public function contact()
        {   
            include '../public/assets/views/main/contact.html'; 
        }
        public function submit()
        { 
            include '../public/assets/views/main/submit.html'; 
        }

    }

   

