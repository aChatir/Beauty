<?php

class Admin_PostsController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
        // action body
    }

    public function blogAction()
    {
        $mdlPosts = new Application_Model_Article();
        var_dump($mdlPosts->findAll());
    }


}



