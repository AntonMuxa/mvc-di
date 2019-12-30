<?php

namespace system\Router;

use system\View\View;

class Router
{
    public function parseUrl ()
    {
        $controller = 'main';
        $action     = 'index';
        $parts = explode('?', $_SERVER['REQUEST_URI']);
        $uriParts = explode('/', $parts[0]);
        if (!empty($uriParts[1])) {
            $controller = $uriParts[1];
        }
        if (!empty($uriParts[2])) {
            $action = $uriParts[2];
        }
        return [
            'controller' => $controller,
            'action'     => $action
        ];
    }

    public function run(View $view)
    {
        $data = $this->parseUrl();
        $controllerName = $data['controller'];
        $action = $data['action'];

        $controller = sprintf("Controller\\%s", ucfirst($controllerName));
        if (class_exists($controller)) {
            $controller = new $controller($view);
            $response = $controller->$action();
            echo $response;
        } else {
            $controller = new \Controller\NotFound($view);
            $response = $controller->$action();
            echo $response;
        }


    }

}