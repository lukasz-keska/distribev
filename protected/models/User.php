<?php

class User extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $username
	 * @var string $password
	 * @var string $email
	 * @var string $profile
	 */

	public $new_password;
    
    /**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('username, password, email', 'length', 'max'=>128),
			array('profile', 'safe'),
		    array('new_password', 'length', 'min' => 5, 'max' => 20, 'on' => 'update'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => 'Login',
			'password' => 'Hasło',
			'new_password' => 'Nowe hasło',
			'email' => 'Email',
			'profile' => 'Profil',
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}

	public function beforeSave() 
	{
	   if($this->isNewRecord)
	    {
	        $this->password = $this->hashPassword($this->password);
	    }
	    else
	    {
	        if($this->new_password)
	        {
	            $this->password = $this->hashPassword($this->new_password);
	        }
	    }
	    
	    return parent::beforeSave();
	}
        
        
        public static function pre(){
            
            $args = func_get_args();
            $last = false;
            ob_start();
            
            if(count($args)==1){
                var_dump($args[0]);
            }else if(count($args)>0){
                $last = array_pop($args);
                foreach($args as $arg){
                    var_dump($arg);
                }
            }
            
            $data = ob_get_clean();
            
            echo '<pre>';
            echo $data;
            echo '</pre>';   
            
            unset($data);
            
            if($last === true ){
                die();
            }
            
        }
}
