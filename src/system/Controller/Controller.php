<?php

namespace system\Controller;

use system\View\View;

class AbstractController
{
    public $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }
}