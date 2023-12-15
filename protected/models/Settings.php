<?php

class Settings extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'ub_settings';
    }

    public function rules()
    {
        return array(
            array('slug,title', 'required'),
            array('title', 'length', 'max'=>255),
            array('slug,title', 'safe', 'on' => 'search'),
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
            'slug' => 'Typ',
            'title' => 'Tytuł',
            'data' => 'Dane'
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
        $criteria->compare('slug', $this->slug);
        $criteria->compare('title', $this->title);
        $criteria->compare('data', $this->data);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }
    
    private static $_slugs = [
        'bannertext' => 'Tekst Str Główna'
    ];
    
    public function getTypeNiceName(){
        return self::$_slugs[$this->slug];
    }

}
