<?php 
class Application_Form_NewsLetter extends Zend_Form
{
	public function init()
	{
		$this->setAction('')->setMethod('Post');///index/news-letter/
        $this->addDecorators(
            array(
                'FormElements', //  <form action=""></form>
                'HtmlTag' => array('tag' => 'form')
            )
        );

		$keyword = new Zend_Form_Element_Text(
                    'keyword', 
                    array(
                        'disableLoadDefaultDecorators' => true
                    )
                );
		$keyword->setAttrib('id', 'keyword')
                    ->setAttrib('onfocus', 'clearText(this)')
                    ->setAttrib('onblur', 'clearText(this)')
                    ->setValue('Subscribe')
                    ->setAttrib('class', 'txt_field')
                    ->addDecorators(array(
                        'viewHelper' //INPUT
                    ));

		$submit = new Zend_Form_Element_Submit('Subscribe', array('disableLoadDefaultDecorators' => true));
		$submit->setAttrib('id', 'subscribe_btn')
                ->setAttrib('alt', 'Subscribe')
                ->setAttrib('title', 'Subscribe')
                ->setAttrib('value', 'Subscribe')
                ->setAttrib('class', 'subscribe_btn')
                ->addDecorators(array(
                    'viewHelper'
                ));
		$this->addElements(array($keyword, $submit));
	}
}
