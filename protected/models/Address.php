<?php

/**
 * This is the model class for table "shop_address".
 *
 * The followings are the available columns in table 'shop_address':
 * @property integer $id
 * @property string $street
 * @property string $zipcode
 * @property string $city
 * @property string $country
 */
class Address extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function isEmpty($vars)
    {
        return
            $vars['street'] == ''
            || $vars['zipcode'] == ''
            || $vars['city'] == ''
            || $vars['country'] == '';
    }

    public function renderAddress()
    {
        echo $this->firstname . ' ' . $this->lastname . '<br />';
        echo $this->street . '<br />';
        echo $this->zipcode . ' ' . $this->city . '<br />';
        echo $this->country;
    }

    public function tableName()
    {
        return 'ub_shops';
    }

    public function rules()
    {
        return array(
            array('name, street, zipcode, city, region, type', 'required'),
            array('sort', 'numerical', 'integerOnly'=>true),
            array('gmap_url', 'length', 'max'=>255),
            array('email', 'length', 'max'=>128),
            array('phone', 'length', 'max'=>20),
            array('type, name, street, zipcode, city, region, sort', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Nazwa',
            'hours_1' => 'Pn-pt',
            'hours_2' => 'So',
            'hours_3' => 'Nd',
            'region' => 'Województwo',
            'street' => 'Adres',
            'city' => 'Miejscowość',
            'zipcode' => 'Kod pocztowy',
            'email' => 'E-mail',
            'phone' => 'Telefon kontaktowy',
            'gmap_url' => 'Url do mapy google',
            'sort' => 'Kolejność'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('type', $this->type);
        $criteria->compare('street', $this->street, true);
        $criteria->compare('zipcode', $this->zipcode, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('region', $this->region, true);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {

            if ($this->isNewRecord) {
                $coords = $this->getCoordinates($this->zipcode . ', ' . $this->city . ', ' . $this->street . ', Polska');
                $this->longitude = $coords['lng'];
                $this->latitude = $coords['lat'];
            }
            return true;
        }
        return false;
    }

    public function getCoordinates($address)
    {

        $address = str_replace(" ", "+",
            $address); // replace all the white space with "+" sign to match with google search pattern

        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

        $response = file_get_contents($url);

        $json = json_decode($response, true); //generate array object from the response from the web

        return array(
            'lat' => $json['results'][0]['geometry']['location']['lat'],
            'lng' => $json['results'][0]['geometry']['location']['lng']
        );
    }
}
