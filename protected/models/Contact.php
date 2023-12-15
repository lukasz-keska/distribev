<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id
 * @property string $name
 * @property string $region
 * @property string $street
 * @property string $zipcode
 * @property string $city
 * @property string $phone1
 * @property string $phone2
 * @property string $fax1
 * @property string $fax2
 * @property string $bok1
 * @property string $bok2
 * @property string $email
 * @property string $type
 * @property string $content
 */
class Contact extends CActiveRecord
{
	public $image;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, position, region, street, zipcode, city, phone1, phone2, fax1, fax2, bok1, bok2, email, email2, type, content, parent_id', 'safe'),
			array('name, region, street, zipcode, city', 'length', 'max'=>255),
			array('phone1, phone2, fax1, fax2, bok1, bok2, type', 'length', 'max'=>20),
			array('email, email2', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, region, street, zipcode, city, phone1, phone2, fax1, fax2, bok1, bok2, email, email2, type, content, parent_id', 'safe', 'on'=>'search'),
			array('image', 'file', 'allowEmpty'=>true, 'types'=>'jpg, jpeg', 'on' => 'insert'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'parent' => array(self::BELONGS_TO, 'Contact', 'parent_id')
		);
	}

	public function behaviors() {
		return array(
			'file' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'jpg',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/contact',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/contact',
			)
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nazwa',
			'position' => 'Stanowisko',
			'region' => 'Województwo',
			'street' => 'Adres',
			'zipcode' => 'Kod pocztowy',
			'city' => 'Miasto',
			'phone1' => 'tel.',
			'phone2' => 'tel.',
			'fax1' => 'fax.',
			'fax2' => 'fax.',
			'bok1' => 'BOK',
			'bok2' => 'BOK',
			'email' => 'mail',
			'email2' => 'mail',
			'type' => 'Typ',
			'content' => 'Treść',
			'parent_id' => 'Rodzic',
			'image' => 'Zdjęcie'

		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax1',$this->fax1,true);
		$criteria->compare('fax2',$this->fax2,true);
		$criteria->compare('bok1',$this->bok1,true);
		$criteria->compare('bok2',$this->bok2,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('parent_id', $this->parent_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getPhonesStr()
	{
		$html = '';
		foreach(array('email','email2', 'phone1', 'phone2', 'fax1', 'fax2', 'bok1', 'bok2') as $attr) {
			$val = $this->getAttribute($attr);
			if($val) {
				$html .= '<span class="normal clearfix"><span style="width: 60px; padding-right: 20px; float: left; text-align: right">'.$this->getAttributeLabel($attr).'</span><span style="width: 200px; float: left">'.$val.'</span></span>';
			}
		}
		return $html;
	}

	public static function getTypes()
	{
		return array(
			'bok_list' => 'Lista BOK',
			'bok' => 'BOK',
			'zaklad' => 'Zakład produkcyjny',
			'zarzad' => 'Biuro zarządu',
			'dzial' => 'Dział',
			'person' => 'Osoba',
			'person_president' => 'Prezes zarządu',
			'person_board_member' => 'Członek zarządu'
		);
	}



	public function getTypeStr()
	{
		$types = self::getTypes();
		return isset($types[$this->type]) ? $types[$this->type] : '';
	}
}
