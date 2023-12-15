<?php

class News extends CActiveRecord
{
	public $image;

        public function tableName()
	{
		return 'ub_news';
	}

        public function rules()
	{
		return array(
			array('news_id, sort, display', 'numerical', 'integerOnly'=>true),
			array('title, description', 'length', 'max'=>1045),
			array('title', 'required'),
			array('news_id, title, description', 'safe', 'on'=>'search'),
			array('image', 'file', 'allowEmpty'=>true, 'types'=>'png', 'on' => 'insert'),
		);
	}

        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        public function relations()
	{
		return array();
	}

        public function scopes()
	{
		return array(
			'sorted' => array('order' => 't.sort asc')
		);
	}
        
	public static function getChilds($id)
	{
		$data = array();

		foreach (News::model()->findAll('parent_id = ' . $id) as $model) {
			$row['text'] = '<span>' . $model->title . '</span>'; //CHtml::link($model->title, $model->getUrl());
			$row['id'] = $model->news_id;
			$row['url'] = $model->getUrl();
			$row['title'] = $model->title;
			//$row['products'] = Products::model()->sorted()->findAll('news_id = :id', array(':id' => $model->news_id));

			$data[] = $row;
		}
		return $data;
	}

	
	
	public function getListed() {
            
            
            User::pre('GET LISTED',true);
            
		$subitems = array();
		if($this->childs) foreach($this->childs as $child) {
			$subitems[] = $child->getListed();
		}
		$returnarray = array('label' => $this->title, 'url' => array('Category/view', 'id' => $this->news_id));
		if($subitems != array()) $returnarray = array_merge($returnarray, array('items' => $subitems));
		return $returnarray;
	}

	
	public function attributeLabels()
	{
		return array(
			'news_id' => '#',
			'title' => 'Tytuł',
			'sort' => 'Kolejność',
                        'description' => 'Opis skrócony',
                        'content' => 'Treść',
                        'display' => 'Wyświetl na stronie głównej',
			'image' => 'Obraz'
		);
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
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/news',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/news',
				'versions' => array(
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

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('title',$this->title,true);
		$criteria->order = 'sort ASC';

		return new CActiveDataProvider('News', array(
			'criteria'=>$criteria,
		));
	}

	public function getUrl()
	{
		return CHtml::normalizeUrl(array('//site/news', '#' => 'news-'.$this->news_id));
	}
}
