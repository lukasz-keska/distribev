<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ContactForm extends CFormModel {
	public $name;
	public $email;
	public $message;
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules() {
		return array (
				array (
						'name, email, message',
						'required' 
				),
				array (
						'email',
						'email' 
				),
				array (
						'name',
						'length',
						'min' => 5,
						'max' => 100 
				),
				array (
						'message',
						'length',
						'min' => 20 
				) 
		);
	}
	
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels() {
		return array (
				'name' => 'Imię i nazwisko',
				'email' => 'E-mail',
				'message' => 'Treść wiadomości' 
		);
	}
	
	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function send() {
		$mail = new YiiMailer('contact_form', array('model' => $this));
		$mail->IsSMTP();
		$mail->setSubject(app()->name . ' - formularz kontaktowy');
		$mail->setTo(get_setting('contact', 'contactFormEmail'));
		$mail->setFrom($this->email, $this->name);
		return $mail->send();
	}
}
