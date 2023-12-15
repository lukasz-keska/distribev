<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class OfferForm extends CFormModel {
	public $name;
	public $email;
	public $date;
	public $phone;
	public $message;
	public $attachment;
	
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules() {
		return array (
				array (
						'name, email, message, phone',
						'required' 
				),
				array (
						'email',
						'email' 
				),
				array (
						'name, date',
						'length',
						'min' => 5,
						'max' => 100 
				),

				array (
						'phone',
						'length',
						'min' => 9,
						'max' => 20
				),
				array (
						'message',
						'length',
						'min' => 20 
				) , 

				array('attachment', 'file', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png,pdf')
		);
	}
	
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels() {
		return array (
				'name' => 'Imię i nazwisko',
				'phone' => 'Telefon', 
				'date' => 'Proponowany termin spotkania',
				'email' => 'E-mail',
				'message' => 'Treść wiadomości',  
				'attachment' => 'Załącznik' 
		);
	}
	
	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function send() {
		$mail = new YiiMailer('offer_form', array('model' => $this));
		$mail->IsSMTP();
		$mail->setSubject(app()->name . ' - prośba o konsultację');
		$mail->setTo(get_setting('offer', 'offerFormEmail'));
		$mail->setFrom($this->email, $this->name);
		$path = null;
		if($this->attachment != null){
			$path = Yii::app()->basePath . '/temp/'.$this->attachment->getName();
			$this->attachment->saveAs($path);
			$mail->setAttachment($path);
		}
		$send = $mail->send();
		if($path !== null) @unlink($path);
		return $send; 
	}
}
