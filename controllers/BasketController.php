<?php

namespace App\controllers;

use App\services\BasketService;

class BasketController extends Controller
{
    protected $actionDefault = 'index';

    public function indexAction()
    {
        var_dump($_SESSION);
    }

    public function addAction()
    {
        $msg = $this->container->basketService->add(
            $this->getId(),
            $this->container->goodRepository,
            $this->request
        );
        return $this->redirect('', $msg);
    }

    public function fakeAddAction()
    {
        $msg = $this->container->basketService->add(
            $this->getId(),
            $this->container->goodRepository,
            $this->request
        );

        return $this->sendJson([
            'COUNT' => count($_SESSION[BasketService::BASKET_NAME]),
            'MSG' => $msg
        ]);
    }
}
