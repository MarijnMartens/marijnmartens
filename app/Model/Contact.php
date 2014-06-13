<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 06/06/14
 * Time: 19:31
 */
class Contact extends AppModel
{
    var $name = 'Contact';
    var $useTable = false;
    public $validate = array(
        'name' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Letters and numbers only'
            ),
            'between' => array(
                'rule' => array('between', 3, 50),
                'message' => 'Between 3 to 5 characters'
            )
        ),
        'email1' => array(
            'email' => array(
                'rule' => array('email', 'true'),
                'message' => 'Please supply a valid email address'
            )/*,
            'match' => array(
                'rule' => array('identicalFieldValues', 'email2'),
                'message' => 'The email addresses do not match'
            )*/
        ),
        'message' => array(
            'rule' => array('minLength', '20'),
            'message' => 'The message is too short'
        )
    );
} 