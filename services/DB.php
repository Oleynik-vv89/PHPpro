<?php

namespace App\services;

class DB 
{
    public function find($sql)
    {
        return 'find' . $sql;
    }
    public function findAll($sql)
    {
        return 'findAll' . $sql;
    }
}
