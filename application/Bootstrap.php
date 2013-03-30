<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initViewHelper()
	{
		/*$teaser = new My_View_Helper_Teaser();
		$view = $this->bootstrap('view');
		$view = $this->getResource('view');
		//$view = new Zend_View();
		$view->addHelperPath('My/View/Helper', 'My_View_Helper');
		$view->registerHelper($teaser, 'teaser');
		$front = Zend_Controller_Front::getInstance();
		$boot = $front->getParam('bootstrap');
		$view = $front->getResource('view');
		var_dump($view);exit;*/
	}

	protected function _initActionHelper()
	{
		$testHelper = new My_Controller_Action_Helper_Test();
		Zend_Controller_Action_HelperBroker::addHelper($testHelper);
	}

	protected function _initLog()
	{
		//$format = '[%timestamp%] : (%priority%) -> %priorityName% : %message%' . "\r\n";
		//$formatter = new Zend_Log_Formatter_Simple($format);
		//$writer = new Zend_Log_Writer_Stream(APPLICATION_PATH . '/logs/log.txt');
		$writer = new Zend_Log_Writer_Firebug();
		//$writer->setEnabled(true);
		//$writer->setFormatter($formatter);
		$logger = new Zend_Log($writer);
		Zend_Registry::set('log', $logger);
	}
}

