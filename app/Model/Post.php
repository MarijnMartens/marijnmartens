<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 18/06/14
 * Time: 14:55
 */
class Post extends AppModel
{
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

} 