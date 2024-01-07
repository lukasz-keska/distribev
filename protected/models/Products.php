<?php

class Products extends CActiveRecord
{

	public $image;
	public $product_stored_ids = array();
	public $product_ids = array();
        public $specifications = [];
        public $infolog_at;
        public $infolog_de;
        
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'ub_product';
	}

	public function beforeValidate() {
		if(Yii::app()->language == 'de')
			$this->price = str_replace(',', '.', $this->price);
		
		return parent::beforeValidate();
	}

	public function rules()
	{
		return array(
			array('title, category_id', 'required'),
			array('product_id, category_id', 'numerical', 'integerOnly'=>true),
			array('title, price, language', 'length', 'max'=>45),
			array('description', 'safe'),
			array('product_id, title, description, price, category_id', 'safe', 'on'=>'search'),
			array('product_ids', 'type', 'type' => 'array', 'allowEmpty' => true),
			array('image', 'file', 'allowEmpty'=>true, 'types'=>'jpg, jpeg, png', 'on' => 'insert'),
		);
	}

	public function relations()
	{
		return array(
			'variations' => array(self::HAS_MANY, 'ProductVariation', 'product_id', 'order' => 'position'),
			'orders' => array(self::MANY_MANY, 'Order', 'ShopProductOrder(order_id, product_id)'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'tax' => array(self::BELONGS_TO, 'Tax', 'tax_id'),
			'images' => array(self::HAS_MANY, 'Images', 'product_id'),
			'shopping_carts' => array(self::HAS_MANY, 'ShoppingCart', 'product_id'),
			'related' => array(self::HAS_MANY, 'ProductsRelated', 'product_id'),
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
				'extension' => 'png',
				// folder to store images
				'directory' => Yii::getPathOfAlias('webroot') . '/upload/product',
				// url for images folder
				'url' => Yii::app()->request->baseUrl . '/upload/product',
				'versions' => array(
					'large' => array(
						'resize' => array(290, 470),
					),
					'xlarge' => array(
						'resize' => array(900, 800)
					),
                                        'thumb' => array(
						'resize' => array(null,225),
					),
					'small' => array(
						'resize' => array(null, 180),
					)
				)
			),
                        'file_ub' => array(
				'class' => 'ext.imageAttachment.ImageAttachmentBehavior',
				// size for image preview in widget
				'previewWidth' => 100,
				'previewHeight' => 100,
				// extension for image saving, can be also tiff, png or gif
				'extension' => 'png',
				// folder to store images
				'directory' => '/home/buzzapipga/united2019/upload/product',
				// url for images folder
				'url' => 'http://www.unitedbeverages.pl/upload/product',
				'versions' => array(
					'large' => array(
						'resize' => array(290, 470),
					),
					'xlarge' => array(
						'resize' => array(900, 800)
					),
                                        'thumb' => array(
						'resize' => array(null,225),
					),
					'small' => array(
						'resize' => array(null, 180),
					)
				)
			),
                    
			'galleryBehavior' => array(
				'class' => 'GalleryBehavior',
				'idAttribute' => 'gallery_id',
				'versions' => array(
					'large' => array(
						'resize' => array(290, 470),
					),
					'xlarge' => array(
						'resize' => array(900, 800)
					),
					'small' => array(
						'resize' => array(null, 180),
					)
				),
				'name' => true,
				'description' => false
			),
			'sortable' => array(
                'class' => 'ext.sortable.SortableBehavior',
                'pk' => 'product_id'
            ),
            'fileupload' => array(
                // set class name
                'class' => 'UploadBehavior',
                // name of the attribute that receives file upload
                'field' => 'infolog',
                // name of the path to save uploaded file
                'path' => Yii::getPathOfAlias('webroot.upload.infolog'),
                'pathUrl' => 'upload/infolog'
                // Note: trailing slash(/) is not required. here we save our file into images
            ),
                    
            'fileupload_ub' => array(
                'class' => 'UploadBehavior',
                'field' => 'infolog_de',
                'path' => '/home/buzzapipga/united2019/upload/infolog_de',
                'pathUrl' => 'upload/infolog_de'
            ),
		);
	}

	public function scopes()
	{
		return array(
			'sorted' => array(
				'order' => '`sort` ASC'
			)
		);
	}

	public function getSpecification($spec) {
		if(isset($this->specifications[$spec]))
			return $this->specifications[$spec];

		return false;
	}

	public function getImage($image = 0, $thumb = false) {
		if(isset($this->images[$image]))
			return Yii::app()->controller->renderPartial('/image/view', array(
				'model' => $this->images[$image],
				'thumb' => $thumb), true); 
	}

        
        /** DEPRECATED ?  **/
	public function getSpecifications() {
		return $this->specifications;
	}

        /** DEPRECATED ? **/
	public function setSpecification($spec, $value) {
		$specs = json_decode($this->specifications, true);
		$specs[$spec] = $value;
		return $this->specifications = json_encode($specs);
	}

        private function _addNewSpec($id,$value){
            $specification = new ProductSpecificationInfo();
            $specification->specification_id = $id;
            $specification->product_id = $this->product_id;
            $specification->value = $value;
            $specification->save(false);
        }
        
        public function setProductSpecifications(){
            $prodSpec = ProductSpecificationInfo::model()->findAll('product_id=:pid',[':pid' => $this->product_id]); 
            $this->specifications = [];
            foreach($prodSpec as $ps){
                $this->specifications[$ps->specification_id] = $ps->value;
            }
            return $this->specifications;
        }
        
	public function setSpecifications($specs) {
            
            $ps  = ProductSpecification::model()->findAll();
            
            $productSpecs = [];
            foreach($ps as $p){
                $productSpecs[$p->id] = (isset($specs[$p->id]))?$specs[$p->id]:'';
            }           
            
            $exSpecs = ProductSpecificationInfo::model()->findAll('product_id=:product_id',[':product_id'=>$this->product_id]);               
            
            if(empty($exSpecs)){
                foreach($productSpecs as $id => $value){
                    $this->_addNewSpec($id,$value);
                }
            }else{
                
                $list = [];
                foreach($exSpecs as $ex){
                    $list[$ex->specification_id] = $ex;
                }
                
                foreach($productSpecs as $id => $value){
                    if(isset($list[$id])){
                        $list[$id]->value = $value;
                        $list[$id]->save(false);
                    }else{
                        $this->_addNewSpec($id,$value);
                    }
                }
                
            }
            
            $this->specifications = $productSpecs;
            
	}
        
        public function delete(){
            ProductSpecificationInfo::model()->deleteAll('product_id=:pid',[':pid'=>$this->product_id]);
            //ProductsRelated::model()->deleteAll('product_id=:pid',[':pid'=>$this->product_id]);
            return parent::delete();
        }

	public function setVariations($variations) {
            
		$db = Yii::app()->db;
		$db->createCommand()->delete('shop_product_variation',
				'product_id = :product_id', array(
					':product_id' => $this->product_id));

		foreach($variations as $key => $value) {
			if($value['specification_id'] 
					&& isset($value['title']) 
					&& $value['title'] != '') {

				if(isset($value['sign']) && $value['sign'] == '-')
					$value['price_adjustion'] -= 2 * $value['price_adjustion'];


				$db->createCommand()->insert('shop_product_variation', array(
							'product_id' => $this->product_id,
							'specification_id' => $value['specification_id'],
							'position' => @$value['position'] ?: 0,
							'title' => $value['title'],
							'price_adjustion' => @$value['price_adjustion'] ?: 0,
							));	
			}
		}
	}

		public function getVariations() {
		$variations = array();
		foreach($this->variations as $variation) {
			$variations[$variation->specification_id][] = $variation;
		}		

		return $variations;
	}


	public function attributeLabels()
	{
		return array(
			'product_id' => 'Produkt',
			'title' => 'Nazwa',
			'description' => 'Opis',
			'price' => 'Cena',
			'category_id' => 'Kategoria',
			'image' => 'Zdjęcie',
                        'infolog' => 'Karta produktu',
                    'infolog_at' => 'Karta produktu AT'
		);
	}

	public function getTaxRate($variations = null, $amount = 1) { 
		if($this->tax) {
			$taxrate = $this->tax->percent;	
			$price = (float) $this->price;
			if($variations)
				foreach($variations as $key => $variation) {
					$price += @ProductVariation::model()->findByPk($variation[0])->price_adjustion;
				}


			(float) $price *= $amount;

			(float) $tax = $price * ($taxrate / 100);

			return $tax;
		}
	}
	public function getPrice($variations = null, $amount = 1) {
		$price = (float) $this->price;
		if($variations)
			foreach($variations as $key => $variation) {
				$price += @ProductVariation::model()->findByPk($variation[0])->price_adjustion;
			}


		(float) $price *= $amount;

		return $price;
	}

	public function search()
	{

		$criteria=new CDbCriteria;
                $criteria->select='t.*';
                $criteria->join = 'INNER JOIN ub_category ON ub_category.category_id = t.category_id';
		$criteria->compare('t.product_id',$this->product_id);
		$criteria->compare('t.title',$this->title,true);
		$criteria->compare('t.description',$this->description,true);
		$criteria->compare('t.price',$this->price,true);
                
                
                if(isset($_GET['Products']) && !empty($_GET['Products']['category_id'])){
                    
                    //$sql = "SELECT DISTINCT category_id FROM ub_category WHERE title LIKE '%".$_GET['Products']['category_id']."%'";
                    //User::pre($sql,Yii::app()->db->createCommand($sql)->queryAll(),true);
                    //$criteria->addCondition('ub_category.title',$this->category_id);
                }
                
		$criteria->compare('ub_product.category_id',$this->category_id);
                
                if(isset($_GET['Products_sort']) && $_GET['Products_sort'] == 'category_id.desc'){
                    $criteria->order = 'ub_category.title DESC';
                }else{
                    $criteria->order = 'ub_category.title ASC';
                }
                
		return new CActiveDataProvider('Products', array(
			'criteria'=>$criteria,
		));
	}

	public function getUrl()
	{
		return CHtml::normalizeUrl(array('//site/brands', 'productId' => $this->product_id));
	}

        public function getCategoryTitle(  ){
            
            $sql = "SELECT title FROM ub_category WHERE category_id=:category_id";
            return Yii::app()->db->createCommand($sql)->queryScalar(['category_id'=>$this->category_id]);
            
        }
        
        public function getUpdateUrl(){
            return Yii::app()->controller->createUrl('products/update',['id'=>$this->product_id]);
        }
        
        public function getDeleteUrl(){
            return Yii::app()->controller->createUrl('products/delete',['id'=>$this->product_id]);
        }
        
        public static function getSubcategories(){
            $cr = new CDbCriteria();
            $cr->addCondition('parent_id!=0');
            $cr->order = 'title ASC';
            $subcategories = Category::model()->findAll($cr);
            $list = [];
            foreach($subcategories as $c){
                $attrb = $c->getAttributes();
                $list[$c->category_id] = $c->title;
            }
            return $list;
        }
        
	public function findFirstInCategory($id)
	{
		$category = Category::model()->findByPk($id);
		if(!$category) {
			return null;
		}

		$ids = array($id);
		foreach($category->getChilds($id) as $cat) {
			$ids[] = $cat['id'];
		}
		$criteria = new CDbCriteria();
		$criteria->addInCondition('category_id', $ids);
		return Products::model()->sorted()->find($criteria);
	}

	public function getRelatedProducts()
	{
		$data = array();
		foreach($this->related as $related) {
			if($related->product2)
				$data[] = $related->product2;
		}
		return $data;
	}

	public function afterFind() {

		$this->product_ids = [];
		foreach ($this->related as $r) {
			$this->product_ids[] = $r->category_id;
		}

		$this->product_stored_ids = $this->product_ids;

		parent::afterFind();
	}

        /** DEPRECATED ? **/
	protected function afterSave() {


		if (!$this->product_ids) //if nothing selected set it as an empty array
			$this->product_ids = array();

		//save the new selected ids that are not exist in the stored ids
		$ids_to_update = array_diff($this->product_ids, $this->product_stored_ids);

		foreach ($ids_to_update as $uid) {
			$m = new ProductsRelated();
			$m->product_id = $this->product_id;
			$m->category_id = $uid;
			$m->save(false);
		}


		//remove the stored ids that are not exist in the selected ids
		$ids_to_remove = array_diff($this->product_stored_ids, $this->product_ids);


		foreach ($ids_to_remove as $did) {
			if ($p = ProductsRelated::model()->findByAttributes(array('product_id' => $this->product_id, 'category_id' => $did))) {
				$p->delete();
			}
		}

		parent::afterSave();
	}
}
