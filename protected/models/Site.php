<?php

class Site extends CActiveRecord
{
	public $image;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
       
	public function tableName()
	{
		return 'ub_site';
	}

	public function rules()
	{
		return array(
			array('site_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
                        array('slug', 'length', 'max'=>20),
			array('title, slug', 'required'),
                        array('slug', 'validateSlug'),
			array('news_id, title, slug', 'safe', 'on'=>'search'),
			array('image', 'file', 'allowEmpty'=>true, 'types'=>'png,jpg', 'on' => 'insert'),
		);
	}

        public function validateSlug($attribute,$params){
            
            User::pre(['validate slug',$attribute,$this->{$attribute}]);
        }
        
	public function getListed() {
		$subitems = array();
		if($this->childs) foreach($this->childs as $child) {
			$subitems[] = $child->getListed();
		}
		$returnarray = array('label' => $this->title, 'url' => array('Site/view', 'id' => $this->site_id));
		if($subitems != array()) $returnarray = array_merge($returnarray, array('items' => $subitems));
		return $returnarray;
	}

	public function relations()
	{
		return array(
			'elements' => array(self::HAS_MANY, 'SiteElements', 'parent_id')
		);
	}

	public function attributeLabels()
	{
		return array(
			'site_id' => '#',
			'slug' => 'Identyfikator',
			'title' => 'Tytuł',
			'header' => 'Tekst nagłówka',
                        'content' => 'Treść główna'
		);
	}
        
        public function getAttributeLabel($attribute){
            if($attribute=='header' && $this->site_id==6){
                return 'Podpis przy kontaktach';
            }
            return parent::getAttributeLabel($attribute);
        }

	public function behaviors() {
		return array(
			'file' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/site',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/site',
				'versions' => array(
                                        'medium' => array(
						'resize' => array(null, 500),
					),
					'small' => array(
						'resize' => array(300, 300),
					)
				)
			),
                        'file_ub' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
                                'directory' => '/home/buzzapipga/united2019/upload/site',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/site',
				
				'versions' => array(
                                        'medium' => array(
						'resize' => array(null, 500),
					),
					'small' => array(
						'resize' => array(300, 300),
					)
				)
			)
		);
	}

	public function search()
	{
            
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('site_id',$this->site_id);

		$criteria->compare('slug',$this->slug);

		$criteria->compare('title',$this->title,true);
		$criteria->order = 'site_id ASC';

		return new CActiveDataProvider('Site', array(
			'criteria'=>$criteria,
		));
	}

	public function getUrl()
	{
		return CHtml::normalizeUrl(array('//site/'.$this->slug));
	}
}
