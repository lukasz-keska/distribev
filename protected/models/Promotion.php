<?php

/**
 * This is the model class for table "promotion".
 *
 * The followings are the available columns in table 'promotion':
 * @property integer $id
 * @property string $title
 * @property double $old_price
 * @property double $new_price
 * @property string $capacity
 * @property string $short_description
 * @property string $description
 */
class Promotion extends CActiveRecord
{
	public $image1;
	public $image2;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'promotion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, in_slider, in_promotions', 'required'),
			array('in_slider, in_promotions', 'numerical'),
			array('image1', 'file', 'allowEmpty'=>false, 'types'=>'jpg, jpeg', 'on' => 'insert'),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, in_slider, in_promotions', 'safe', 'on'=>'search'),
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
		return array(
			'sorted' => array('order' => 't.sort asc')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Tytuł',
			'description' => 'Pełny opis',
			'in_slider' => 'Pokaż w sliderze',
			'in_promotions' => 'Pokaż w promocjach',
			'image1' => 'Plik'
		);
	}

	public function behaviors() {
		return array(
			'file1' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'jpg',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/promotion/bg',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/promotion/bg',
			),
			'file2' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/promotion/photo',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/promotion/photo',
			),
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('in_slider',$this->in_slider);
		$criteria->compare('in_promotions',$this->in_promotions);
		$criteria->compare('description',$this->description,true);
		$criteria->order = 't.sort ASC';
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Promotion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
