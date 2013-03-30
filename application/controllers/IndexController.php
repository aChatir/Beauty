<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $log = Zend_Registry::get('log');
        $log->addPriority('prp', 8);
        //echo $this->_helper->test('#', 'my Text', 'red');
        /*$test = $this->getHelper('Test');
        echo $test->getLink();*/
        /*$this->view->slider = $this->view->action('slider', 'index');
        $this->view->newsLetter = $this->view->action('news-letter', 'index');
        $this->view->headTitle('Accueil');
        $mdlArticle = new Application_Model_Article();
        $this->view->data = $mdlArticle->findAll(2);*/
        //$log->info($this->view->data);
        try {
            throw new Exception('Here my Exception');
        } catch (Exception $e) {
            $message =  PHP_EOL . "\tMessage :: " . $e->getMessage() . PHP_EOL;
            $message .= "\tFile :: " . $e->getFile() . PHP_EOL;
            $message .= "\tLine :: " . $e->getline() . PHP_EOL;
            $log->prp($message);
        }

    }

    public function sliderAction()
    {

    }

    public function newsLetterAction()
    {
        $form = new Application_Form_NewsLetter();
        $mdlNewLetter = new Application_Model_NewsLetter();
        $flash = $this->getHelper('FlashMessenger');
        if ($this->getRequest()->isPost()) {
            $email = $this->getRequest()->getPost('keyword');
            $tempData = $form->getValues();
            if ($form->isValid($tempData) && $email != 'Subscribe') {
                $data = array(
                    'email' => $email
                );
                if (!$mdlNewLetter->isEmailExists($email)) {
                    $mdlNewLetter->saveNews($data);
                    $flash->addMessage('<p>this email has been saved</p>');
                    $this->view->saved = true;
                } else {
                    $flash->addMessage('<p>this email is elready exists</p>');
                    $this->view->saved = false;
                }
            }
        } 
        $this->view->flash = $flash;
        $this->view->form = $form;
    }


}



