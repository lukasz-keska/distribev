<?php

/**
 * This is the model class for table "slide".
 *
 * The followings are the available columns in table 'slide':
 * @property integer $id
 * @property string $file
 * @property integer $portfolio_item_id
 * @property integer $portfolio_category_id
 * @property integer $sort
 */
class Slide extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'slide';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file,portfolio_item_id, portfolio_category_id', 'required'),
			array('portfolio_item_id, portfolio_category_id, sort', 'numerical', 'integerOnly'=>true),
			array('file', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file, portfolio_item_id, portfolio_category_id, sort', 'safe', 'on'=>'search'),
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
		    'portfolioItem' => array(self::BELONGS_TO, 'PortfolioItem', 'portfolio_item_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'Obrazek',
			'portfolio_item_id' => 'Realizacja',
			'portfolio_category_id' => 'Kategoria',
			'sort' => 'Kolejność',
		);
	}
	
	public function behaviors()
	{
	    return array(
	        'sortable' => array(
	            'class' => 'ext.sortable.SortableBehavior',
	        )
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
		$criteria->compare('file',$this->file,true);
		$criteria->compare('portfolio_item_id',$this->portfolio_item_id);
		$criteria->compare('portfolio_category_id',$this->portfolio_category_id);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slide the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function img($htmlOptions = array())
	{
	    if($this->file)
    	    return CHtml::image($this->getFileUrl(), '', $htmlOptions);
	    return false;
	}
	
	public function getFileUrl()
	{
	    if($this->file)
    	    return Yii::app()->request->getBaseUrl(true) . '/upload/slide/'.$this->file;
	    return false;
	}
	
	public function getUrl()
	{
	    return $this->portfolioItem ? $this->portfolioItem->getUrl() : '#';
	}
}
