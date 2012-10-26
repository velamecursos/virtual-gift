<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GiftController
 *
 * @author RENATO
 */
class GiftsController extends AppController{
 public $components = array('Session');
 public $layout = 'gifts';
 
    public function index(){
        
        $allGifts = $this->Gift->find('all');
        
        $this->set('allGifts',$allGifts);
    }
}

?>
