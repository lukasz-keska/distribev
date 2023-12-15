<?php

/**
 * This is the model class for table "portfolio_item".
 *
 * The followings are the available columns in table 'portfolio_item':
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $short_name
 * @property string $slug
 * @property integer $gallery_id
 * @property string $description
 * @property string $architect
 * @property integer $area
 * @property integer $plot_area
 * @property integer $buildings_area
 * @property integer $cubature
 * @property string $project_year
 * @property string $realization_year
 * @property string $contest_year
 * @property array $fields
 */
class PortfolioItem extends CActiveRecord {
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'portfolio_item';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'name, short_name, slug, description, category_id',
						'required' 
				),
				array (
						'category_id, gallery_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'name, slug',
						'length',
						'max' => 100 
				),
				array (
						'short_name',
						'length',
						'max' => 50 
				),
				array (
						'architect, fb_gallery',
						'length',
						'max' => 255 
				),
		       array (
		            'fields',
		          'safe',
		      ),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'id, category_id, name, short_name, slug, gallery_id, description, architect',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'category' => array (
						self::BELONGS_TO,
						'PortfolioCategory',
						'category_id' 
				) 
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'category_id' => 'Kategoria',
				'name' => 'Nazwa',
				'short_name' => 'Krótka nazwa',
				'slug' => 'Slug',
				'gallery_id' => 'Gallery',
				'description' => 'Opis',
				'architect' => 'Architekt',
				'fb_gallery' => 'Galeria na Facebook' 
		);
	}
	public function behaviors() {
		return array (
				'galleryBehavior' => array (
						'class' => 'GalleryBehavior',
						'idAttribute' => 'gallery_id',
						'versions' => array (),
						'name' => true,
						'description' => false 
				) 
		);
	}
	public function getCategoryName() {
		return ($this->category) ? $this->category->name : 'brak';
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
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'category_id', $this->category_id );
		$criteria->compare ( 'name', $this->name, true );
		$criteria->compare ( 'short_name', $this->short_name, true );
		$criteria->compare ( 'slug', $this->slug, true );
		$criteria->compare ( 'gallery_id', $this->gallery_id );
		$criteria->compare ( 'description', $this->description, true );
		$criteria->compare ( 'architect', $this->architect, true );

		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return PortfolioItem the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	public function getUrl() {
		return CHtml::normalizeUrl ( array (
				'/portfolio/view',
				
				'slug' => $this->category->slug, 
				'slug2' => $this->slug 
		) );
	}
	
	public function afterFind()
	{
	    parent::afterFind();
	    $fields = unserialize($this->fields);
	    $this->fields = $fields ? $fields : array();
	}
	
	public function beforeValidate()
	{
	    if(parent::beforeValidate())
	    {
	        if(is_array($this->fields))
	           $this->fields = serialize($this->fields);
	        
	       return true; 
	    }  
	    return false;
	}
	
	public function afterSave()
	{
	    parent::afterFind();
	    $this->fields = unserialize($this->fields);
	}
}
