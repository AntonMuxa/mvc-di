<?php

namespace Controller;

use system\Controller\AbstractController;

class Post extends AbstractController
{
    public function index()
    {
        $model = new \model\Post();
        $posts = $model->getPosts();
        echo $this->view->generate('post.phtml', $posts[0]);
    }
}