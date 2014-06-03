<?php
/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:05
 */

class ArchiveController extends AppController {
    public function index(){
        $data = array(
            'title' => 'Archive',
            'subtitle' => 'Lets go back in time..'
        );

        $this->set('data', $data);
    }

} 