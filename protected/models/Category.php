<?php

class Category extends CActiveRecord
{
	public $image;
        public $image_brand;
        public $image_banner;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getChilds($id)
	{
		$data = array();

		foreach (Category::model()->findAll('parent_id = ' . $id) as $model) {
			$row['text'] = '<span>' . $model->title . '</span>'; //CHtml::link($model->title, $model->getUrl());
			$row['id'] = $model->category_id;
			$row['url'] = $model->getUrl();
			$row['title'] = $model->title;

			$row['children'] = Category::getChilds($model->category_id);
			$row['products'] = Products::model()->sorted()->findAll('category_id = :id', array(':id' => $model->category_id));

			$data[] = $row;
		}
		return $data;
	}
        
        public static function getParentCategories()
	{
		$data = array();
                $command = Yii::app()->db->createCommand('SELECT * FROM `ub_category` WHERE parent_id=0');
                $categories = $command->queryAll();
		foreach ($categories as $model) {
			$row['id'] = $model['category_id'];
			$row['url'] = '/nasze_marki.html?id='.$model['category_id'];
			$row['title'] = $model['title'];
                        $row['description'] = $model['description'];
			$data[$model['category_id']] = $row;
		}
		return $data;
	}

	public function tableName()
	{
		return 'ub_category';
	}

	public function rules()
	{
		return array(
			array('category_id, parent_id, sort, is_hidden, is_hidden_brands', 'numerical', 'integerOnly'=>true),
			array('title, language', 'length', 'max'=>45),
                        array('url', 'length', 'max'=>255),
                        //array('description, tile_desc', 'length', 'max'=>5000),
			array('title', 'required'),
			array('category_id, parent_id, title, description, language', 'safe', 'on'=>'search'),
			array('image, image_banner, image_brand', 'file', 'allowEmpty'=>true, 'types'=>'png,jpg', 'on' => 'insert')
		);
	}

	public function getListed() {
		$subitems = array();
		if($this->childs) foreach($this->childs as $child) {
			$subitems[] = $child->getListed();
		}
		$returnarray = array('label' => $this->title, 'url' => array('Category/view', 'id' => $this->category_id));
		if($subitems != array()) $returnarray = array_merge($returnarray, array('items' => $subitems));
		return $returnarray;
	}

	public function relations()
	{
		return array(
			'Products' => array(self::HAS_MANY, 'Products', 'category_id'),
			'parent' => array(self::BELONGS_TO, 'Category', 'parent_id'),
			'childs' => array(self::HAS_MANY, 'Category', 'parent_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'category_id' => '#',
			'parent_id' => 'Kategoria nadrzędna',
			'title' => 'Nazwa',
			'sort' => 'Kolejność',
                        'url' => 'Url pod kafelek',
                        'tile_desc' => 'Opis',
			'image' => 'Obraz kafelka',
                        'image_brand' => 'Obrazek marki / logo',
                        'image_banner' => 'Banner',
                        'is_hidden' => 'Ukryta na stronie głównej',
                        'is_hidden_brands' => 'Ukryta na stronie marek'
		);
	}

	public function behaviors() {
		return array(
			'fileimage' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/category',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/category',
				'versions' => array(
					'small' => array(
						'resize' => array(300, 300),
					)
				)
			),
                        'filebrand' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/category-brand',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/category-brand',
				'versions' => array('small' => array(
						'resize' => array(150, 150),
					))
			),
                        'filebanner' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/category-banner',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/category-banner',
				'versions' => array()
			),
                    
                        'fileimage_ub' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => '/home/buzzapipga/united2019/upload/category',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/category',
				'versions' => array(
					'small' => array(
						'resize' => array(300, 300),
					)
				)
			),
                        'filebrand_ub' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => '/home/buzzapipga/united2019/upload/category-brand',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/category-brand',
				'versions' => array('small' => array(
						'resize' => array(150, 150),
					))
			),
                        'filebanner_ub' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 200,
				'previewHeight' => 200,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => '/home/buzzapipga/united2019/upload/category-banner',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/category-banner',
				'versions' => array()
			)
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('category_id',$this->category_id);
                $criteria->compare('parent_id',$this->parent_id);
                if($this->parent_id!==0){
                    $criteria->addCondition('parent_id!=0');
                }
		$criteria->compare('title',$this->title,true);
		$criteria->order = 'parent_id ASC, sort ASC';

		return new CActiveDataProvider('Category', array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchMain()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('category_id',$this->category_id);
                $criteria->compare('parent_id',0);
                $criteria->compare('title',$this->title,true);
		$criteria->order = 'parent_id ASC, sort ASC';

		return new CActiveDataProvider('Category', array(
			'criteria'=>$criteria,
		));
	}
        
        public static function searchProducts( $query ){
            
            $sql = "SELECT p.title as product_title, p.product_id as pid, "
                    . "c.title as category_title, c.category_id as cid, c.parent_id as main_category, "
                    . "c2.title as main_category_title "
                    . "FROM ub_product p JOIN ub_category c ON c.category_id=p.category_id "
                    . "INNER JOIN ub_category c2 on c2.category_id=c.parent_id "
                    . "WHERE p.title LIKE :term OR c.title LIKE :term OR c2.title LIKE :term";
            $command = Yii::app()->db->createCommand($sql)->bindValues([':term'=>'%'.$query.'%']);
            
            $raw = $command->queryAll();
            
            $result = [];
            foreach($raw as $r){
                
                if(!isset($result[$r['main_category']])){
                    $result[$r['main_category']] = [
                        'title' => $r['main_category_title'],
                        'categories' =>[
                            
                        ]
                    ];
                }
               
                if(!isset($result[$r['main_category']]['categories'][$r['cid']])){
                    $result[$r['main_category']]['categories'][$r['cid']] = [
                        'title' => $r['category_title'],
                        'products' => []
                    ];
                }
                
                $result[$r['main_category']]['categories'][$r['cid']]['products'][$r['pid']] = $r['product_title'];
                
                /*
                $result[$r['pid']] = [
                    'title' => $r['product_title'],
                    'parent' => [
                        'id' => $r['cid'],
                        'title' => $r['category_title']
                    ],
                    'category' => [
                        'id' => $r['main_category'],
                        'title' => $r['main_category_title']
                    ]
                ];*/
            }
            
            return $result;
        }

        
	public function getUrl()
	{
		return CHtml::normalizeUrl(array('//site/brands', 'id' => $this->category_id));
	}
}
