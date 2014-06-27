<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:05
 */
class ProjectsController extends AppController
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
        $this->loadModel('Project');
        //Setup pagination
        $this->Paginator->settings = $this->paginate;
        //Get data
        $DynamicData = $this->Paginator->paginate('Project');
        //Prepare for view
        $data = array(
            'title' => 'Projects',
            'subtitle' => 'Lets go back in time..',
            'projects' => $DynamicData
        );
        //Render view
        $this->set('data', $data);
    }
} 