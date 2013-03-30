<?php

class BlogController extends Zend_Controller_Action
{

    public function init()
    {
        //$this->_helper->layout->setLayout('admin');
    }

    public function indexAction()
    {
        
    }

    public function postAction()
    {
        $id = $this->_getParam('cid');
        $mdlAtricle = new Application_Model_Article();
        $this->view->post = $mdlAtricle->findDataById($id);
    }

    public function addAction()
    {
        $form = new Application_Form_Blog();
        $form->setAction('/blog/add')
             ->setMethod('Post');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $dataPost = $request->getPost();
            if ($form->isValid($dataPost)) {
                $mdlArticle = new Application_Model_Article();
                $dataForm = $form->getValues();
                $data = array();
                $data['title'] = $dataForm['title'];
                $data['subTitle'] = $dataForm['subTitle'];
                $data['content'] = $dataForm['content'];
                $data['imageLink'] = $dataForm['imgLink'];
                $data['imgBlog'] = $dataForm['imgBlog'];
                $data['createdAt'] = date('Y-m-d');
                $data['updateAt'] = date('Y-m-d');
                $data['publish'] = 0;
                $mdlArticle->saveBlog($data);
                $this->_redirect('/blog/add');
            } else {
               $form->populate($dataPost);
            }
        }
        $this->view->form = $form;
    }


}





