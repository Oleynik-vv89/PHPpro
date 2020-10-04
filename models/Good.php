<?php
namespace App\models;

/**
 * Class Good
 * @package app\models
 * @method  static getAll() self
 */
class Good extends Model
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
        return 'goods';
    }

}
