<?php
	class Application_Form_Contact extends Zend_Form {
		
		public function init()
		{
			$author = $this->createAuthor();
			$email = $this->createEmail();
			$subject = $this->createSubject();
			$message = $this->createMessage();
			$submit = $this->createSubmit();
			$reset = $this->createReset();
			
			$this->setDisableLoadDefaultDecorators(true);
			
			$this->setDecorators(
				array(
					array(
						'ViewScript',
						array(
							'viewScript' => 'contact/_contact.phtml'
						)	
					)
				)
			);
			
			$this->addElements(array(
				$author, $email, $subject, $message, $submit, $reset	
			));
		}
		
		public function createAuthor()
		{
			$auth = new Zend_Form_Element_Text('author');
			$auth->setLabel('Name')
			     ->setAttrib('id', 'author')
				 ->setAttrib('class', 'required input_field');
			return $auth;
		}
		
		public function createEmail()
		{
			$email = new Zend_Form_Element_Text('email');
			$email->setLabel('Email')
			     ->setAttrib('id', 'email')
				 ->setAttrib('class', 'validate-email required input_field');
			return $email;
		}
		
		public function createSubject()
		{
			$subject = new Zend_Form_Element_Text('subject');
			$subject->setLabel('Subject')
			     ->setAttrib('id', 'subject')
				 ->setAttrib('class', 'input_field');
			return $subject;
		} 
		
		public function createMessage()
		{
			$msg = new Zend_Form_Element_TextArea('message');
			$msg->setLabel('Message')
			     ->setAttrib('id', 'text')
				 ->setAttrib('class', 'required');
			return $msg;
		}
		
		public function createSubmit()
		{
			$sub = new Zend_Form_Element_Submit('submit');
			$sub ->setAttrib('id', 'submit')
				 ->setAttrib('class', 'submit_btn float_l')
				 ->setAttrib('name', 'submit');
			return $sub;
		}
		
		public function createReset()
		{
			$reset = new Zend_Form_Element_Reset('reset');
			$reset->setAttrib('id', 'reset')
				 ->setAttrib('class', 'submit_btn float_r')
				 ->setAttrib('name', 'reset');
			return $reset;
		}
	}