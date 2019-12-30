<?php

use system\Router\Router;
use system\View\View;

class App
{
    private $router;
    private $view;
    public function __construct()
    {
        $this->router = new Router();
        $this->view   = new View();
    }
    public function run()
    {
        $this->router->run($this->view);
    }
}