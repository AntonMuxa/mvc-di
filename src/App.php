<?php

use system\Router\Router;
use system\View\View;

class App
{
    private $router;
    private $view;
    public function __construct()
    {
        $factory = new \system\Factory\Factory();
        $objectManager = new \system\ObjectManager($factory);
        $this->router = $objectManager->create(\system\Router\Router::class);
        $this->view = $objectManager->create(\system\View\View::class);
        //$this->router = new Router();
        //$this->view   = new View();
    }
    public function run()
    {
        $this->router->run($this->view);
    }
}