<?php

/**
 * This is the model class for table "worker".
 *
 * The followings are the available columns in table 'worker':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $sort
 */
class Worker extends CActiveRecord
{
    public $image;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'worker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description', 'required'),
			array('sort', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, sort', 'safe', 'on'=>'search'),
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
	
    public function scopes() {
        return array(
            'sorted' => array(
                    'order'=>'sort ASC'
            ),
        );
    }
    
    public function behaviors() {
        return array(
            'file' => array(
                'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
                // size for image preview in widget
                'previewWidth' => 100,
                'previewHeight' => 100,
                // extension for image saving, can be also tiff, png or gif
                'extension' => 'jpg',
                // folder to store images
                'directory' => Yii::getPathOfAlias('webroot') . '/upload/worker',
                // url for images folder
                'url' => Yii::app()->request->baseUrl . '/upload/worker',
                'versions' => array(
                    'small' => array(
                        'centeredpreview' => array(60, 60),
                    ),
                    'medium' => array(
                        'resize' => array(500, null),
                    )
                )
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
			'name' => 'Imię i nazwisko',
			'description' => 'Opis',
			'sort' => 'Kolejność',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('sort',$this->sort);
		
		$criteria->order = 'sort ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Worker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
