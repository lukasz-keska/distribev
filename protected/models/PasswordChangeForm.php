<?php

/**
 * PasswordChangeForm class.
 * PasswordChangeForm is the data structure for keeping
 * user change password form data. It is used by the 'changepassword' action of 'UserController'.
 */
class PasswordChangeForm extends CFormModel
{
    public $oldPassword;
    public $password;
    public $verifyPassword;
    public $oldPasswordRequired = true;
    public $userModel;

    public function rules()
    {
        $rules = [];
        if ($this->oldPasswordRequired) {
            $rules[] = array('oldPassword, password, verifyPassword', 'required');
            $rules[] = array('oldPassword', 'verifyOldPassword');
        } else {
            $rules[] = array('password, verifyPassword', 'required');
        }

        $rules[] = ['password', 'length', 'min' => 6];
        $rules[] = ['password', 'length', 'max' => 40];
        $rules[] = ['verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => 'Powtórzone hasło jest błędne'];
        return $rules;
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'oldPassword' => 'Aktualne hasło',
            'password' => 'Nowe hasło',
            'verifyPassword' => 'Powtórz hasło',
        );
    }

    /**
     * Verify Old Password
     */
    public function verifyOldPassword($attribute, $params)
    {
        if (!$this->userModel) {
            throw new CException('Specify $userModel');
        }


        if (!$this->userModel->findByPk(Yii::app()->user->id)->validatePassword($this->$attribute)) {
            $this->addError($attribute, 'Aktualne hasło jest niepoprawne');
        }
    }
}