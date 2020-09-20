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

}
