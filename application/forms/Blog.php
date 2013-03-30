<?php

class Application_Form_Blog extends Zend_Form
{

    public function init()
    {
        $this->addPrefixPath('My_Form_Decorator', 'My/Form/Decorator', 'decorator');
        $this->setOptions(array('disableLoadDefaultDecorators' => true));
        $this->addDecorators(
            array(
                'FormElements',
                'form'
            )
        );
        $title = new Zend_Form_Element_Text('title');
        $title->setLabel('Title')
              ->setRequired(true)
              ->addDecorator('FormDiv', array('openTag' => '<p>', 'closeTag' => '</p>'));
        
        $subTitle = new Zend_Form_Element_Text('subTitle');
        $subTitle->setLabel('Sub Title')
              ->setRequired(true)
              ->addDecorator('FormDiv', array('openTag' => '<div>', 'closeTag' => '</div>'));
        
        $content = new Zend_Form_Element_Textarea('content');
        $content->setLabel('Content')
              ->setRequired(true)
              ->addDecorator('FormDiv', array('openTag' => '<div>', 'closeTag' => '</div>'));
        
        $imageLink = new Zend_Form_Element_Text('imgLink');
        $imageLink->setLabel('image link')
              ->setRequired(true)
              ->addDecorator('FormDiv', array('openTag' => '<div>', 'closeTag' => '</div>'));
        
        $imageBlog = new Zend_Form_Element_Text('imgBlog');
        $imageBlog->setLabel('image Blog')
              ->setRequired(true)
              ->addDecorator('FormDiv', array('openTag' => '<div class="field">', 'closeTag' => '</div>'));
        
        $submit = new Zend_Form_Element_Submit('Valider');
        $this->addElements(array(
            $title, $subTitle, $content, $imageLink, $imageBlog, $submit
        ));
                
    }


}

