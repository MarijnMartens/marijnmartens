<?php
/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:10
 */

class ContactController extends AppController{
    public function index(){
        $data = array(
            'title' => 'Contact',
            'subtitle' => 'Want to tell me something?'
        );

        $this->set('data', $data);
    }

} 