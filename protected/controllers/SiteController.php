<?php

class SiteController extends Controller
{

    /**
     * Declares class-based actions.
     */
    
    public $layout = '//layouts/frontend';
    
    public function actions()
    {
        return array(
// captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
// They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionWarning()
    {
        $this->renderPartial('warning');
    }

    public function actionCatalog( $slug )
    {
        /*$sql = 'SELECT t.*, c.title as catalog_title FROM `ub_catalog_page`t right join ub_catalog c on c.catalog_id=t.catalog_id WHERE c.parent_id = (SELECT p.site_id FROM ub_site p WHERE p.slug=:slug) AND t.imagefile!="" AND t.imagefile IS NOT NULL ORDER by page_number';
        $command = Yii::app()->db->createCommand($sql);
        $command->params = [':slug' => $slug];
        $list = $command->query();
        */
        
        $cr = new CDbCriteria();
        $cr->select = 't.*, c.title as catalog_title';
        $cr->join = 'RIGHT JOIN ub_catalog c on c.catalog_id=t.catalog_id';
        $cr->addCondition('t.imagefile!="" AND t.imagefile IS NOT NULL');
        $cr->addCondition('c.parent_id = (SELECT p.site_id FROM ub_site p WHERE p.slug=:slug)');
        $cr->params = [':slug'=>$slug];
        $cr->order = 't.page_number ASC';
        
        $pages = CatalogPage::model()->findAll($cr);
        
        $this->layout = '//layouts/frontend-catalog_v5';
        $this->render('catalog_v5', ['pages' => $pages]);
        
        
        /*if(Yii::app()->request->getParam('v5')){
            $this->layout = '//layouts/frontend-catalog_v5';
            $this->render('catalog_v5', ['pages' => $pages]);
        }else{
            $this->layout = '//layouts/frontend-catalog';
            $this->render('catalog', ['pages' => $pages]);
        }*/
        
        
    }

    public function actionTest(){
        $this->layout = '//layouts/frontend-test';
        $this->render('bezpieczenstwo', array());
    }
    
    public function actionIndex()
    {
        $this->layout = '//layouts/frontend-gate';
        $this->render('gate', array());
    }
    
    public function actionMain()
    {
        $cr = new CDbCriteria();
        $cr->addCondition('parent_id=0');
        $cr->addCondition('is_hidden_brands=0');
        $cr->order = 'sort ASC';
        $categoriesFull = Category::model()->findAll($cr);
        $categories = [];
        foreach($categoriesFull as $c){
            $categories[] = $c;
        }
        
        $promotions = [
            'shopsdetal' => self::_getSite('shopsdetal'),
            'horeca' => self::_getSite('horeca'),
            //'b2b' => self::_getSite('b2b'),
        ];
        
        $bannerText = Settings::model()->find('slug=:slug',[':slug'=>'bannertext']);
        
        $this->render('index', array(
            'categories' => $categories,
            'promotions' => $promotions,
            'bannertext' => $bannerText
        ));
    }

    public function actionBezpieczenstwo()
    {       
        $this->render('bezpieczenstwo', array());
    }
    
    public function actionNews($id = null){
        
        
        if(!empty($id)){
            $model = News::model()->findByPk($id);
            
            if(empty($model)){
                Yii::app()->user->setFlash('error', 'Nie znaleziono strony');
                Yii::app()->request->redirect('site/news');
            }
            
            $cr = new CDbCriteria();
            $cr->addCondition("news_id!=:news_id");
            $cr->order = 'news_date DESC';
            $cr->limit = 3;
            $cr->params = array(':news_id' => $model->news_id);
            
            $news = News::model()->findAll($cr);
            
            
            
            $this->render('newsitem', array('model' => $model, 'news'=>$news));
        }else{
            
            $cpage = 1;
            if(Yii::app()->request->getParam('page')){
                $cpage = Yii::app()->request->getParam('page');
            }
            $page_size = 6;
            
            $cr = new CDbCriteria();
            $cr->order = 'news_date DESC';
            $cr->limit = $page_size;
            $cr->offset = ($cpage-1)*$page_size;
            $news = News::model()->sorted()->findAll($cr);
            
            $item_count = News::model()->count();

            $pages =new CPagination($item_count);
            $pages->setPageSize($page_size);
            $end =($pages->offset+$pages->limit <= $item_count ? $pages->offset+$pages->limit : $item_count);
            $sample =range($pages->offset+1, $end);
            
            $this->render('news', array(
                                    'news' => $news,
                                    'item_count'=>$item_count,
                                    'page_size'=>$page_size,
                                    'items_count'=>$item_count,
                                    'pages'=>$pages,
                                    'sample'=>$sample
                    
                    
                    ));
        }
        
        
        
    }
    
    public function actionProduct($id = null){
        
        Yii::app()->setComponent('db', Yii::app()->params['db_ub']);
        
        $product = Products::model()->findByPk($id);
        if($product){
            
            $categoryId = $product->category_id;
            $subCategory = Category::model()->findByPk($categoryId);
            $mainCategory = Category::model()->findByPk($subCategory->parent_id);
            
            $cr = new CDbCriteria();
            $cr->addCondition("category_id=:category_id");
            $cr->addCondition("product_id!=:product_id");
            $cr->params = array(':category_id' => $categoryId, ':product_id' => $id);
            $cr->order = 'sort ASC';
            $products = Products::model()->findAll($cr);
            
            $specsList = ProductSpecification::model()->findAll();
            $specs = [];
            foreach($specsList as $spec){
                if(!empty($spec->nicename))
                    $specs[$spec->nicename] = $spec->getAttributes();
            }
            
            $product->setProductSpecifications();
            
            $this->render('product', array(
                'product' => $product,
                'specs' => $specs,
                'products' => $products,
                'mainCategory' => $mainCategory,
                'category' => $subCategory
             ));
            
        }else{
            
            //User::pre('OK',true);
            
            Yii::app()->user->setFlash('error','Nie znaleziono produktu');
            Yii::app()->request->redirect('/site/brands');
        }
            
            
    }
    
    public function actionSearch(){
        
        if(Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest){
            if(isset($_POST['q'])){
                $result = Category::searchProducts($_POST['q']);
                echo json_encode($result);
                Yii::app()->end();
            }
        }
        
    }
    
    public function actionBrands($id = null, $cid = null)
    {
        
        Yii::app()->setComponent('db', Yii::app()->params['db_ub']);
       
        $categories = Category::getChilds(0);
        
        if($id){
            
            $category = Category::model()->findByPk($id);
            
            $cr = new CDbCriteria();
            
            $cr->addCondition("parent_id=:parent_id");
            $cr->params = array(':parent_id' => $id);
            $cr->order = 'title ASC';
            $subcategories = Category::model()->findAll($cr);
            
            $productsList = [];
            
            $productFilters = [];
            foreach($subcategories as $subcat){
                $cr = new CDbCriteria();
                $cr->addCondition("category_id=:category_id");
                $cr->params = array(':category_id' => $subcat->category_id);
                $cr->order = 'sort ASC';
                $products = Products::model()->findAll($cr);
                $productsList[$subcat->category_id] = [];
                foreach($products as $product){ 
                    $productFilters[$product->product_id] = [];
                    $productsList[$subcat->category_id][] = $product;
                }
            }
            
            $criteria = new CDbCriteria();
            $criteria->addInCondition('t.product_id', array_keys($productFilters));
            $sql = "SELECT t.*, s.nicename AS spec_nn, s.title as spec_title FROM ub_spec_info t RIGHT JOIN ub_product_specification s ON s.id = t.specification_id WHERE ".$criteria->condition." AND  t.value!='' AND s.in_filter = 1 ORDER BY t.product_id, t.specification_id";
            
            
            $command = Yii::app()->db->createCommand($sql);
            $allFilters = $command->queryAll(true, $criteria->params);
            
            $filters = [];
            
            
            foreach($allFilters as $filter){
                $productFilters[$filter['product_id']][$filter['spec_nn']] = $filter['value'];
                if(!isset($filters[$filter['spec_nn']])){
                    $filters[$filter['spec_nn']] = ['name' => $filter['spec_title'], 'elements' => []]; 
                }
                if(!in_array($filter['value'], $filters[$filter['spec_nn']]['elements']))
                    $filters[$filter['spec_nn']]['elements'][]=$filter['value'];
            }
            
            /** porzadkowanie filtrow **/
            if(in_array($id,[7,3,1]) && isset($filters['origincountry'])){
                sort($filters['origincountry']['elements']);
            }
            
            if(isset($filters['alcotype'])){
                sort($filters['alcotype']['elements']);
            }
            
            
            if($id==7 && isset($filters['taste'])){
                $switch = $filters['taste']['elements'][2];
                $filters['taste']['elements'][2] = $filters['taste']['elements'][1];
                $filters['taste']['elements'][1] = $switch;
            }
            
            if($id==86 && isset($filters['alcotype'])){
                $switch1 = $filters['alcotype']['elements'][0];
                $switch2 = $filters['alcotype']['elements'][2];
                $filters['alcotype']['elements'][0] = $filters['alcotype']['elements'][1];
                $filters['alcotype']['elements'][1] = $switch1;
                $filters['alcotype']['elements'][2] = $filters['alcotype']['elements'][3];
                $filters['alcotype']['elements'][3] = $switch2;
            }
            //User::pre($filters,true);
            $subCategory = null;
            if($cid){
                $subCategory = Category::model()->findByPk($cid);
            }
            
            $this->render('brand', array(
                'filters'=>$filters,
                'productFilters' => $productFilters,
                'categories' => $subcategories,
                'category' => $category,
                'products'  => $productsList,
                'cid' => $cid,
                'subCategory' => $subCategory
             ));
        }else{
            
            $cr = new CDbCriteria();
            $cr->addCondition('parent_id=0');
            $cr->addCondition('is_hidden_brands=0');
            $cr->order = 'sort ASC';
            $categories = Category::model()->findAll($cr);
            
            $this->render('brands', array(
                'categories' => $categories
            ));
            
        }
    }

    public function actionWhere()
    {
        $shops = array();
        $models = Address::model()->findAll(array('order' => 'city ASC, name ASC'));
        foreach($models as $shop) {
            if(!isset($shops[$shop->city])) {
                $shops[$shop->city] = array(
                    'name' => $shop->city,
                    'items' => array(),
                    'search' => $shop->city . ' ' . $shop->region . ' ' . $shop->zipcode
                );
            }
            $shops[$shop->city]['items'][] = $shop;
            $shops[$shop->city]['search'] .= ' ' . $shop->name . ' ' . $shop->street;
        }
        $this->render('where', array('shops' => $shops));
    }

    public function actionAbout()
    {
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        
        $model = self::_getSite('about');
        if(empty($model)){
            Yii::app()->request->redirect('site/index');
        }
        
        $elements = [];
        $siteElements = SiteElement::model()->findAll('parent_id='.$model->site_id);
        foreach($siteElements as $el){
            $elements[$el->slug][] = $el->getAttributes();
        }
        
        $this->render('about', ['model' => $model, 'elements' => $elements]);
    }
    
    private static function _getSite( $slug ){
        return Site::model()->find('slug="'.$slug.'"');
    }
    
    
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }
    
    public function actionCareer()
    {
        $model = self::_getSite('career');
        $elements = [];        
        $siteElements = SiteElement::model()->findAll('parent_id='.$model->site_id);
        foreach($siteElements as $el){
            $elements[$el->slug][$el->element_id] = $el->getAttributes();
        }
        
        $this->render('career',['model' => $model, 'elements' => $elements]);
    }


    /**
     * Displays the contact page
     */
    public function actionContact($id = 1)
    {
        $model = self::_getSite('contact');
        
        $elements = [];        
        $siteElements = SiteElement::model()->findAll('parent_id='.$model->site_id);
        foreach($siteElements as $el){
            $elements[$el->slug][$el->element_id] = $el->getAttributes();
        }
        $this->render('contact', ['model'=>$model, 'elements' => $elements]);
        
    }

    public function actionPromotions( $slug = null )
    {
        $promotions = [
            'shopsdetal' => self::_getSite('shopsdetal'),
            'horeca' => self::_getSite('horeca'),
            //'b2b' => self::_getSite('b2b'),
        ];
        
        
        if($slug){
            
            $model = $promotions[$slug];
            if(empty($model)){
                Yii::app()->request->redirect('site/index');
            }
            
            $renderParams = [];
            
            $elements = [];
            $siteElements = SiteElement::model()->findAll('parent_id='.$model->site_id);
            
            switch($slug){
                case 'b2b':
                    /*$products = [];
                    $giftIds = Yii::app()->db->createCommand('SELECT product_id FROM `ub_product_related` WHERE category_id=89')->queryAll();
                    if(!empty($giftIds)){

                        $ids = [];
                        foreach($giftIds as $id){
                            $ids[] = $id['product_id'];
                        }

                        $cr = new CDbCriteria();
                        $cr->addInCondition('product_id', $ids);
                        $products = Products::model()->findAll($cr);
                    }
                    
                    $renderParams['products'] = $products;*/
                    
                    foreach($siteElements as $el){
                        if($el->slug=='banner' || $el->slug == 'product'){
                            $elements[$el->slug][] = $el;
                        }else{
                            $elements[$el->slug][] = $el->getAttributes();
                        }
                    }
                    
                    
                    
                    break;
                default:
                    foreach($siteElements as $el){
                        $elements[$el->slug][] = $el;
                    }
                    break;
            }
            
            
            
            $renderParams = array_merge($renderParams,array('model' => $model,'elements'=>$elements));
            
            
            
            
            $this->render($slug,$renderParams);
            
        }else{
            
            $model = self::_getSite('promotions');
            
            $this->render('promotions', ['model' => $model,'promotions' => $promotions]);
        }
        
    }
    
    
    public function actionShops()
    {
        $shops = array();
        $models = Address::model()->findAll(array('order' => 'sort ASC'));
        
        $shops = [];
        foreach($models as $m){
            $shops[$m->type][$m->id] = $m;
        }
        
        $this->render('shops', array('models' => $models, 'shops' => $shops));
    }
    
    public function actionOffer()
    {
        $model = self::_getSite('offer');
        
        $elements = [];
        $siteElements = SiteElement::model()->findAll('parent_id='.$model->site_id);
        foreach($siteElements as $el){
            $elements[$el->slug][] = $el;
        }
        
        $this->render('offer', array('model'=>$model,'elements'=>$elements));
        
        
        /*$model = new OfferProduct('search');
        $model->unsetAttributes();
        if(isset($_GET['OfferProduct']))
            $model->setAttributes($_GET['OfferProduct']);

        $total = OfferProduct::model()->count();

        $method = Yii::app()->request->isAjaxRequest ? 'renderPartial' : 'render';
        $this->$method('offer', array(
            'model' => $model,
            'total' => $total
        ));*/
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;

// if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

// collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
// validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
// display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
