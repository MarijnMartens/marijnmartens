<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:06
 */
class BlogController extends AppController
{
    public $components = array('Paginator');

    public $paginate = array(
        'limit' => 1,
        'order' => array(
            'date' => 'desc')
    );

    public function index()
    {
        //Load model
        $this->loadModel('Blog');
        //Setup pagination
        $this->Paginator->settings = $this->paginate;
        //Get data
        $DynamicData = $this->Paginator->paginate('Blog');

        //Prepare for view
        $data = array(
            'title' => 'Blog',
            'subtitle' => 'Things you will regret ever knowing',
            'posts' => $DynamicData
        );
        //Render view
        $this->set('page_for_layout', 'blog');
        $this->set('data', $data);
    }
} 