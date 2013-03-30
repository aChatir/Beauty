<?php 
class My_View_Helper_Math extends Zend_View_Helper_Abstract
{
	public function math($a , $b, $op)
	{
		switch ($op) {
			case '+':
				return $a + $b;
				break;
			case '-':
				return $a - $b;
				break;
			case '*':
				return $a * $b;
				break;
			case '/':
				if ($b == 0) {
					return 'impossible de diviser par zero';
				} else {
					return $a / $b;
				}
				break;
			default:
				return $a + $b;
				break;
		}
	}
}

