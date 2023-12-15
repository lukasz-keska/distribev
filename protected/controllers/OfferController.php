<?php

class OfferController extends Controller
{

    const PASS = 'cron321qaz';
    /**
     * Declares class-based actions.
     */
    public $layout = '//layouts/frontend';

    public function actionIndex()
    {
        $model = new OfferProduct('search');
        $model->unsetAttributes();
        if(isset($_GET['OfferProduct']))
            $model->setAttributes($_GET['OfferProduct']);

        $total = OfferProduct::model()->count();

        $method = Yii::app()->request->isAjaxRequest ? 'renderPartial' : 'render';
        $this->$method('index', array(
            'model' => $model,
            'total' => $total
        ));
    }

    public function actionTest()
    {
        echo '{
	"success": true,
	"message": "",
	"data": [
		{
		"id":2,
			"name": "xNazwa",
			"country": "Kraj pochodzenia",
			"producer": "Producent",
			"group": "Grupa",
			"barcode": "Kod kreskowy",
			"alcohol": "5%",
			"photo": "http://adres/nazwapliku.jpg"
		},{
		"id": 3,
			"name": "Nazwaaa",
			"country": "Kraj pochodzenia",
			"producer": "Producent",
			"group": "Grupa",
			"barcode": "Kod kreskowy",
			"alcohol": "5%",
			"photo": "http://adres/nazwapliku.jpg"
		},{
		"id": 4,
			"name": "Nazwaaa",
			"country": "Kraj pochodzenia",
			"producer": "Producent",
			"group": "Grupa",
			"barcode": "Kod kreskowy",
			"alcohol": "5%",
			"photo": "http://adres/nazwapliku.jpg"
		},{
		"id": 5,
			"name": "Nazwa",
			"country": "Kraj pochodzenia",
			"producer": "Producent",
			"group": "Grupa",
			"barcode": "Kod kreskowy",
			"alcohol": "5%",
			"photo": "http://adres/nazwapliku.jpg"
		}
	]
}
';
    }

    public function actionSyncproducts()
    {
        $this->checkPass();

        $url = 'http://www.janussa.pl/ub/ajax.get_products.php';

        $json = $this->getJSON($url);
        OfferProduct::model()->deleteAll();
        $total = count($json['data']);

        for($i = 0; $i < $total; $i++) {
            $product = $json['data'][$i];
            $model = new OfferProduct();
            $model->setAttributes($product);
            $model->id = $i + 1;
            $model->save(false);
        }
    }

    public function actionSynccountries()
    {
        $this->checkPass();

        $url = 'http://www.janussa.pl/ub/ajax.get_countries.php';
        $this->syncCategory('country', $url);
    }

    public function actionSyncgroups()
    {
        $this->checkPass();

        $url = 'http://www.janussa.pl/ub/ajax.get_groups.php';
        $this->syncCategory('group', $url);
    }

    public function actionSyncproducers()
    {
        $this->checkPass();

        $url = 'http://www.janussa.pl/ub/ajax.get_producers.php';
        $this->syncCategory('producer', $url);
    }

    private function syncCategory($type, $url)
    {
        $json = $this->getJSON($url);
        OfferCategory::model()->deleteAll('type = "'.$type.'"');
        $total = count($json['data']);
        for($i = 0; $i < $total; $i++) {
            $product = $json['data'][$i];
            $model = new OfferCategory();
            $model->setAttributes($product);
            $model->type = $type;
            $model->id = $product['id'];
            $model->save(false);
        }
    }

    private function checkPass()
    {
        if(Yii::app()->request->getQuery('password') != self::PASS)
            throw new CHttpException(403);
    }

    private function getJSON($url)
    {
        $json = file_get_contents($url);
        if($json !== false){
            $json = json_decode($json, true);
            if($json['success'] == true) {
                return $json;
            } else {
                throw new CException('Error while downloading JSON: ' . $url . ', error message: ' . $json['message']);
            }
        } else throw new CException('Error while downloading JSON: ' . $url);
    }

}
