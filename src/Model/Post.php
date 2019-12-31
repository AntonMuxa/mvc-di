<?php

namespace Model;

use system\Model\AbstractModel;

class Post extends AbstractModel
{
    public function getPosts()
    {
        $result = $this->db->row('SELECT `title`, `desc` FROM posts');
        return $result;
    }

}