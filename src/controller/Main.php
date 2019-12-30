<?php

namespace Controller;

use system\Controller\AbstractController;

class Main extends AbstractController
{
    public function index()
    {
        echo $this->view->generate('index.phtml');
    }
}