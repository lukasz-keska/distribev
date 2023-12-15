<?php

/**
 * This is the model class for table "ub_catalog".
 *
 * The followings are the available columns in table 'ub_catalog':
 * @property integer $catalog_id
 * @property integer $parent_id
 * @property string $title
 */
class Catalog extends CActiveRecord
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ub_catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, title', 'required'),
			array('parent_id', 'numerical'),
			array('title', 'length', 'max'=>255),
                        array('catalog_id, parent_id, title', 'safe', 'on'=>'search'),
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

	public function scopes()
	{
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'catalog_id' => 'ID',
			'title' => 'Tytuł',
			'parent_id' => 'Promocja'
		);
	}

	public function behaviors() {
		return array();
	}
	
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('parent_id',$this->parent_id);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getUrl(){
            
            $cr = new CDbCriteria();
            $cr->addCondition('site_id=:id');
            $cr->params = [':id'=>$this->parent_id];
            $parent = Site::model()->find($cr);
            
            return Yii::app()->controller->createUrl('/site/catalog/slug/'.$parent->slug);
            
        }
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
