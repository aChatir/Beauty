<?php 
class My_Controller_Action_Helper_Test extends Zend_Controller_Action_Helper_Abstract
{
	public function direct($link, $text, $color)
	{
		return '<a href="' . $link . '" style="color:' . $color . '" >' . $text . '</a>';
	}

	public function getLink()
	{
		return 'link';
	}
}