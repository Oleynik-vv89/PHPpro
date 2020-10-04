<?php

namespace App\controllers;

use App\models\User;

class UserController extends Controller
{

    public function allAction()
    {
        $users = User::getAll();
        return $this->render('userAll', ['users' => $users]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $person = User::getOne($id);
        return $this->render('userOne', ['user' => $person]);
    }

    public function updateAction()
    {
        /** @var User $user */
        $user = User::getOne(39);
        $user->login = 'test';
        $user->save();
    }
    public function insertAction()
    {
        /** @var User $user */
        $user = new User();
        $user->password = 'Admin12';
        $user->login = 'Admin12';
        $user->name = 'Admin12';
        $user->save();
    }

    public function addAction()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return $this->renderer->render('userAdd');
        }

        $user = new User();
        $user->password = $_POST['password'];
        $user->login = $_POST['login'];
        $user->name = $_POST['name'];
        $user->save();

        header('Location: /');
        return '';
    }


}
