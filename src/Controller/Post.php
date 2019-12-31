<?php

namespace Controller;

use system\Controller\AbstractController;

class Post extends AbstractController
{
    public function index()
    {
        //$model = new \Model\Post();
        $factory = new \system\Factory\Factory();
        $objectManager = new \system\ObjectManager($factory);
        $model = $objectManager->create(\Model\Post::class);
        $posts = $model->getPosts();
        echo $this->view->generate('post.phtml', $posts[0]);
    }
}