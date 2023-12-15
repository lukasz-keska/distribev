<?php

class ProductSpecificationInfo extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'ub_spec_info';
	}

	public function relations()
	{
		return array();
	}
        
        public function rules()
	{
		return array(
			array('product_id,specification_id,value', 'required'),
			array('value', 'length', 'max'=>128),
			array('product_id,specification_id', 'numerical'),
			array('product_id,specification_id,value', 'safe', 'on'=>'search'),
		);
	}
        
        public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'value' => 'Wartość',
			'product_id' => 'ID Produktu',
			'specification_id' => 'ID Specyfikacji'
		);
	}
}
