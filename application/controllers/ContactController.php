<?php

class ContactController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        echo $this->_helper->test('#', 'my Text', 'red');
    }


}

