<?php

namespace Controller;

use system\Controller\AbstractController;

class NotFound extends AbstractController
{
    public function index()
    {
        echo $this->view->generate('404.html');
    }
}