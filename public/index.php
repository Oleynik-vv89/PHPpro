<?php
use App\models\Good;
use App\models\User;
use App\services\DB;
use App\services\Autoload;
include dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

#$bd = new DB();
$good = new Good();
var_dump($good->getOne(1));
var_dump($good->getAll());

