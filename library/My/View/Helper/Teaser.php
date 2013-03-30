<?php 
class My_View_Helper_Teaser extends Zend_View_Helper_Abstract
{
    public function teaser($data, $expNumber)
    {
    	$exp = explode(' ', $data, $expNumber);
	    array_pop($exp);
	    return implode(' ', $exp) . ' ...';
    }
}

