<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:05
 */
class ArchiveController extends AppController
{
    public $components = array('Paginator');

    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'date' => 'desc')
        );
    public function index()
    {
        //Load model
        $this->loadModel('Post');
        //Setup pagination
        $this->Paginator->settings = $this->paginate;
        //Get data
        $DynamicData = $this->Paginator->paginate('Post');
        //Prepare for view
        $data = array(
            'title' => 'Archive',
            'subtitle' => 'Lets go back in time..',
            'posts' => $DynamicData
        );
        //Render view
        $this->set('data', $data);
    }
} 