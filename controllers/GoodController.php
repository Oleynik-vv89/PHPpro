<?php


namespace App\controllers;


use App\models\Good;

class GoodController extends Controller
{
    public function allAction()
    {
        $goods = Good::getAll();
        return 'Товары';
    }


}