<?php
/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:07
 */

class IndexController extends AppController{
    public function index(){
        $data = array(
            'title' => 'Home',
            'subtitle' => 'Hi there stranger!'
        );

        $this->set('data', $data);
    }

} 