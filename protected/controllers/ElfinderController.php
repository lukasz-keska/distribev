<?php
class ElfinderController extends CController
{
    public function actions()
    {
        return array(
            'connector' => array(
                'class' => 'ext.elFinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/upload/',
                    'URL' => Yii::app()->baseUrl . '/upload/',
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),
        );
    }

    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules()
    {
        return array(
            array(
                'allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('connector'),
                'users' => array('@')
            ),
            array(
                'deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }
}