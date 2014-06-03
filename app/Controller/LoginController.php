<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:25
 */
class LoginController extends AppController{
    public function index(){
    $data = array(
        'title' => 'Login',
        'subtitle' => 'Wow wow slow down!'
    );

    $this->set('data', $data);
}

} 