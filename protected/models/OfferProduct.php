<?php

/**
 * This is the model class for table "offer_product".
 *
 * The followings are the available columns in table 'offer_product':
 * @property integer $id
 * @property string $name
 * @property string $producer
 * @property string $group
 * @property string $country
 * @property string $barcode
 * @property string $alcohol
 * @property string $photo
 */
class OfferProduct extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'offer_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, producer, group, country, barcode, alcohol, photo', 'required'),
			array('name, photo', 'length', 'max'=>255),
			array('producer, group, country, barcode', 'length', 'max'=>100),
			array('alcohol', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, producer, group, country, barcode, alcohol, photo', 'safe', 'on'=>'search'),
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
			'producer' => 'Producent',
			'group' => 'Grupa',
			'country' => 'Kraj pochodzenia',
			'barcode' => 'Kod kreskowy',
			'alcohol' => 'Zawartość alkoholu',
			'photo' => 'Zdjęcie',
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
		$criteria->compare('producer',$this->producer);
		$criteria->compare('t.group',$this->group);
		$criteria->compare('country',$this->country);
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('alcohol',$this->alcohol,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->order = 'name ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OfferProduct the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
