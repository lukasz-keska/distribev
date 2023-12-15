<?php

class ProductsRelated extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function primaryKey(){
		return array('product_id', 'category_id');
	}

	public function tableName()
	{
		return 'ub_product_related';
	}

	public function relations()
	{
		return array(
			'product1' => array(self::BELONGS_TO, 'Products', 'product_id'),
			'product2' => array(self::BELONGS_TO, 'Category', 'category_id')
		);
	}
}
