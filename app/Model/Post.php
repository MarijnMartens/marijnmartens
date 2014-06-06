<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 06/06/14
 * Time: 11:59
 */
class Post extends AppModel
{
    public $name = 'pages';

    public function getPosts($page)
    {
        return $this->find('all', array('conditions' => array('page' => $page), 'order' => array('date' => 'DESC'), 'limit' => 3));
    }
} 