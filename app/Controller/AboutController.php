<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:06
 */
class AboutController extends AppController
{
    public function index()
    {
        //Load model
        $this->loadModel('Post');
        //Get data
        $DynamicData = $this->Post->getPosts(2);
        //Prepare for view
        $data = array(
            'title' => 'About',
            'subtitle' => 'Things you will regret ever knowing',
            'posts' => $DynamicData
        );
        //Render view
        $this->set('data', $data);
    }
} 