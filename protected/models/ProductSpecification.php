<?php

/**
 * This is the model class for table "shop_product_specification".
 *
 * The followings are the available columns in table 'shop_product_specification':
 * @property integer $id
 * @property string $title
 */
class ProductSpecification extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProductSpecification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function __toString() {
		return $this->title;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ub_product_specification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title', 'required'),
			array('title', 'length', 'max'=>255),
			array('is_user_input', 'default', 'value' => 0),
			array('is_user_input, in_info, in_description, in_filter, required', 'numerical'),
			array('is_user_input, required, nicename', 'required'),
                        array('nicename','validateNiceName'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title', 'safe', 'on'=>'search'),
		);
	}

        public function validateNiceName($attribute,$params){
            
            if(preg_match('/([^a-zA-Z0-9])/',$this->{$attribute})){
                $this->addError($attribute, 'Skrót może zawierać wyłącznie znaki alfanumeryczne (litery i cyfry, bez spacji, znaków specjalnych lub polskich liter)');
            }else{
                
                $xsts = ProductSpecification::model()->find('nicename=:nicename', [':nicename'=>$this->{$attribute}]);
                if($xsts && $xsts->id != $this->id){
                    $this->addError($attribute, 'Podany skrót jest już przypisany do innego atrybutu');
                }
                
            }
            
        }
        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'variations' => array(self::HAS_MANY, 'ProductVariation', 'specification_id') 
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Nazwa',
                        'nicename' => 'Skrót (tylko znaki alfanumeryczne)',
			'in_info' => 'Widoczne w infologu',
			'in_description' => 'Widoczne w opisie',
                        'in_filter' => 'Używane w filtrach',
			'required' => 'Wymagane'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
