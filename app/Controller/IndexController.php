<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:07
 */
class IndexController extends AppController
{
    public function index()
    {
        //Load model
        $this->loadModel('Post');
        //Get data
        $DynamicData = $this->Post->getPosts(1);
        //Prepare for view
        $data = array(
            'title' => 'Home',
            'subtitle' => 'Hi there stranger!',
            'posts' => $DynamicData
        );
        //Render view
        $this->set('data', $data);
    }
} 