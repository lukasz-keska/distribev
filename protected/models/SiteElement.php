<?php

class SiteElement extends CActiveRecord
{
	public $image;
        public $removable = true;

        private static $_SLUGS = [
            1 => [
                'zarzad' => 'Członek zarządu',
                'zarzad-opis' => 'Opis zarządu',
                'company-data' => 'Dane firmy'
            ],
            2 => [
                'asset' => 'Atut',
                'banner' => 'Baner',
                'contact' => 'Kontakt do kierownika'
                
            ],
            3 => [
                'asset' => 'Atut',
                'banner' => 'Baner',
                'contact' => 'Kontakt do kierownika'                
            ],
            4 => [
                'contact' => 'Kontakt',
                'gifttext' => 'Opis kolekcji upominkowej',
                'subtitle' => 'Podtytuł',
                'subcontent' => 'Kontent tekstowy',
                'banner' => 'Baner',
                'product' => 'Produkt w kolekcji' 
            ],
            5 => [
                'banner' => 'Baner',
                'contact' => 'Kontakt do koordynatora'
            ],
            6 => [
                'contact' => 'Kontakt'
            ],
            8 => [
                'weoffer' => 'Naszym pracownikom zapewniamy',
                //'phases' => 'Etapy procesu rekrutacji',
                'standards' => 'Standardy procesu rekrutacji'
            ]
        ];
        
        public static $siteElementFormMap = [
            'phases' => ['content'],
            'weoffer' => ['file'],
            'asset' => ['content','file'],
            'banner' => ['image'],
            'product' => ['title','image','data'],
            'contact' => ['content','data'],
            'zarzad' => ['content', 'image']
        ];
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
               
	public function tableName()
	{
		return 'ub_site_element';
	}

        public function getSlugs(){
            
            if(isset(self::$_SLUGS[$this->parent_id])){
                $result = self::$_SLUGS[$this->parent_id];
            }else{
            
                $command = Yii::app()->db->createCommand('SELECT DISTINCT slug FROM '. $this->tableName().' WHERE parent_id=:parent_id ORDER BY slug ASC')
                        ->bindParam(':parent_id', $this->parent_id, PDO::PARAM_INT);
                $result = [];
                foreach($command->queryAll() as $slug){
                    $result[$slug['slug']] = $slug['slug'];
                }
            
            }
            
            return $result;
        }
        
        
	public function rules()
	{
		return array(
			array('element_id, parent_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
                        array('slug, section', 'length', 'max'=>20),
			array('title, slug', 'required'),
                        array('slug', 'validateSlug'),
			array('news_id, title, slug, element_data', 'safe', 'on'=>'search'),
			array('image', 'file', 'allowEmpty'=>true, 'types'=>'png,jpg', 'on' => 'insert'),
		);
	}

        public function validateSlug($attribute,$params){
            if($this->{$attribute} == 'asset' && $this->parent_id == 3){
                //atuty do strony Horeca - nie moze byc wiecej niz 12
                $cr = new CDbCriteria();
                $cr->addCondition('parent_id=:id');
                $cr->addCondition('slug=:slug');
                $cr->params = [':id'=>  $this->parent_id,':slug'=>$this->{$attribute}];
                $count = self::model()->count($cr);
                if($count==12){
                    $this->addError($attribute, 'Nie możesz już dodać więcej atutów - maksymalna liczba to 12');
                }
            }
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
			'parent' => array(self::BELONGS_TO, 'Site', 'parent_id')
		);
	}

	public function attributeLabels()
	{
		return array(
			'element_id' => '#',
			'parent_id' => 'Rodzic',
                        'slug' => 'Typ',
                        'section' => 'Sekcja',
			'title' => 'Tytuł',
                        'content' => 'Treść',
                        'sitefile' => 'Plik',
                        'element_data' => 'Dane dodatkowe'
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
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/site-elements',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/site-elements',
				'versions' => array(
					'small' => array(
						'resize' => array(300, 300),
					)
				)
			),
                        'fileupload' => array(
                            // set class name
                            'class' => 'UploadBehavior',
                            // name of the attribute that receives file upload
                            'field' => 'sitefile',
                            // name of the path to save uploaded file
                            'path' => Yii::getPathOfAlias('webroot.upload.site-element-file'),
                            'pathUrl' => 'upload/site-element-file'
                            // Note: trailing slash(/) is not required. here we save our file into images
                        )
		);
	}

	public function search()
	{
            
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('element_id',$this->element_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('title',$this->title,true);
		$criteria->order = 'element_id ASC';

		return new CActiveDataProvider('SiteElement', array(
			'criteria'=>$criteria,
		));
	}

        
        public function getDeleteUrl(){
            return '/backend/deletew';
        }
        
        
}
