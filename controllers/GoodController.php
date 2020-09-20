<?php


namespace App\controllers;


use App\models\Good;

class GoodController extends Controller
{
    public function allAction()
    {
        $goods = Good::getAll();
        return $this->render('goodAll', ['goods' => $goods]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $goods = Good::getOne($id);
        return $this->render('goodAOne', ['goodA' => $goods]);
    }
}