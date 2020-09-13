<?php
namespace App\models;

class Basket extends Model
{
    public $id;
    public $name;
    public $price;
    public $info;

    /**
     * Метод для
     *
     * @return mixed
     */
    protected function getTableName():string
    {
        return 'baskets';
    }

}
