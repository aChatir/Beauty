<?php

/**
 * Description of formTable
 *
 * @author Saâd Guelzim
 */
class My_Form_Decorator_FormDiv extends Zend_Form_Decorator_Abstract
{
    public function render($content) {
        $placement = $this->getPlacement();
        switch ($placement) {
            case 'APPEND':
            case 'PREPEND':
            default:
                return $this->getOption('openTag') . $content . $this->getOption('closeTag');
                break;
        }
    }
}
