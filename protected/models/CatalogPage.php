<?php

/**
 * This is the model class for table "ub_catalog_page".
 *
 * The followings are the available columns in table 'ub_catalog_page':
 * @property integer $page_id
 * @property integer $catalog_id
 * @property integer $page_number
 */
class CatalogPage extends CActiveRecord
{
	public $image;
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ub_catalog_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_id', 'required'),
			array('catalog_id, page_number', 'numerical'),
                        array('title', 'length', 'max'=>255),
                        array('page_number','validatePageNumber'),
                        array('image', 'file', 'allowEmpty'=>true, 'types'=>'jpg, jpeg, png', 'on' => 'insert'),
			array('page_id, catalog_id, page_number, title', 'safe', 'on'=>'search'),
		);
	}

        public function validatePageNumber($attribute,$params){
            if($this->$attribute<1){
                $this->addError($attribute, 'Niewłaściwy numer strony');
            }
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

        public function getImage(){
            return 'no-image';
        }
        
        
	public function scopes()
	{
		return array(
			//'sorted' => array('order' => 't.page_number asc')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'ID',
			'catalog_id' => 'Katalog',
			'page_number' => 'Numer strony',
                        'title' => 'Tytuł / opis',
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
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/catalog',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/catalog',
				'versions' => array(
					'pageformat' => array(
						'resize' => array(460, 600),
					),
					'small' => array(
						'resize' => array(150, null),
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
				// folder to store images
				'directory' => '/home/buzzapipga/united2019/upload/catalog',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/catalog',
				'versions' => array(
					'pageformat' => array(
						'resize' => array(460, 600),
					),
					'small' => array(
						'resize' => array(150, null),
					)
				)
			),
			/*'sortable' => array(
                            'class' => 'ext.sortable.SortableBehavior',
                        )*/
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

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('catalog_id',$this->catalog_id);
		$criteria->compare('page_number',$this->page_number);
		$criteria->order = 't.page_number ASC';
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        
        public function updatePagesNumbers($reset = false){
            
            $count = $this->countPages();
            if($reset){
                $this->page_number = $count; //zrownujemy zeby nadac numery od 1, niezaleznie od aktualnego numeru strony - reset tylko przy usuwaniu strony
            }
            $cr = new CDbCriteria();
            $cr->addCondition('catalog_id=:cid');
            if($this->page_number != $count){
                $cr->addCondition('page_number>=:pn');
            }else{
                $cr->addCondition('page_number<=:pn');
            }            
            $cr->addCondition('page_id!=:id');
            $cr->order = 'page_number ASC';
            $cr->params = [':cid'=>$this->catalog_id, ':pn'=>$this->page_number,':id'=>$this->page_id];
            $pages = CatalogPage::model()->findAll($cr);            
            $i = 1;
            foreach($pages as $p){
                $p->page_number = ($this->page_number != $count)?$this->page_number+$i:$i;
                $p->save(false);
                $i++;
            }
        }
        
        public function countPages( $catalogId = false ){
            
            if(!$catalogId){
                $catalogId = $this->catalog_id;
            }
            
             return Yii::app()->db->createCommand('select count(*) from ub_catalog_page where catalog_id=:cid')->queryScalar([':cid'=>$catalogId]);
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
