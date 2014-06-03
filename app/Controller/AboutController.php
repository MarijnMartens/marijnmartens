<?php
/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:06
 */

class AboutController extends AppController{
    public function index(){
        $data = array(
            'title' => 'About',
            'subtitle' => 'Things you will regret ever knowing'
        );

        $this->set('data', $data);
    }

} 