<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'DistribEv',
    // preloading 'log' component
    'preload' => array(
        'log',
        'bootstrap'
    ),
    'language' => 'pl',
    // autoloading model and component classes
    'aliases' => array(
        'bootstrap' => 'application.modules.bootstrap'
    ),
    'import' => array(
        'application.models.*',
        'application.components.*',
        // bootstrap
        'bootstrap.behaviors.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*',
        'bootstrap.components.*',
        'application.helpers.*',
        'application.extensions.galleryManager.*',
        'application.extensions.galleryManager.models.*',
        'application.extensions.image.Image',
        'ext.YiiMailer.YiiMailer',
        'application.modules.shop.models.*',
        'application.modules.shop.ShopModule',
    ),
    'defaultController' => 'backend/portfolioItem',
    // application components
    'components' => array(
        'bsHtml' => array(
            'class' => 'bootstrap.components.BSHtml'
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('/backend/default/login')
        ),
        
        'db' => array(           
            'connectionString' => 'mysql:host=buzzapipgadistri.mysql.db;dbname=buzzapipgadistri',
            'emulatePrepare' => true,
            'enableProfiling' => true,
            'enableParamLogging' => true,
            'username' => 'buzzapipgadistri',
            'password' => 'DHfqGCgPfiqj4Ur',
            'charset' => 'utf8',
            'tablePrefix' => ''
        ),
        'db2' => array(
            'connectionString' => 'mysql:host=buzzapipgaub.mysql.db;dbname=buzzapipgaub',
            'emulatePrepare' => true,
            'enableProfiling' => true,
            'enableParamLogging' => true,
            'username' => 'buzzapipgaub',
            'password' => 'United09123',
            //'username' => 'root',
            //'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => ''
            // 'schemaCachingDuration' => 3600 * 24
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error'
        ),
        'file' => array(
            'class' => 'application.extensions.file.CFile'
        ),
        'cache' => array(
            'class' => 'CDummyCache'
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'urlSuffix' => '.html',
            'showScriptName' => false,
            'rules' => array(
                //'' => '/site/warning',
                '' => '/site/index',
                'strona_glowna' => '/site/main',
                'bezpieczenstwo' => '/site/bezpieczenstwo',
                'kontakt' => '/site/contact',
                'o_firmie' => '/site/about',
                //'oferta' => '/offer/index',
                'kariera' => '/site/career',
                'oferta_weselna' => '/site/offer',
                'nasze_marki' => '/site/brands',
                'produkt' => '/site/product',
                'aktualnosci' => '/site/news',
                'oferta' => '/site/promotions',
                'gdzie_kupic' => '/site/where',
                'sklepy' => '/site/shops',
                'oferta/detal' => '/site/promotions/slug/shopsdetal',
                'oferta/horeca' => '/site/promotions/slug/horeca',
                'promocje/b2b' => '/site/promotions/slug/b2b',
                'katalog/hurt' => '/site/catalog/slug/shopsdetal',
                'katalog/horeca' => '/site/catalog/slug/horeca',
                'katalog/b2b' => '/site/catalog/slug/b2b'
            )
        ),
        // 'cache' => array(
        // 'class' => 'system.caching.CFileCache',
        // ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                // array(
                // 'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                // 'ipFilters'=>array('127.0.0.1','::1', '94.240.18.148'),
                // ),
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning'
                )
            )
        ),
        'clientScript' => array(
            'packages' => array(
                'jquery' => array(
                    'baseUrl' => 'http://ajax.googleapis.com/ajax/libs/jquery/',
                    'js' => array(
                        '2.0.2/jquery.min.js'
                    )
                ),
                'jquery.ui' => array(
                    'baseUrl' => 'https://code.jquery.com/ui/',
                    'js' => array(
                        '1.9.2/jquery-ui.min.js'
                    )
                )
            )
        ),
        'image' => array(
            'class' => 'application.extensions.image.CImageComponent'
        ),
        'settings' => array(
            'class' => 'CmsSettings',
            'cacheComponentId' => 'cache',
            'cacheId' => 'global_website_settings',
            'cacheTime' => 0,
            'tableName' => '{{settings}}',
            'dbComponentId' => 'db',
            'createTable' => false,
            'dbEngine' => 'InnoDB',
        ),
    ),
    'modules' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.BootStrapModule'
        ),
        'backend',
        'gii' => array(
            'generatorPaths' => array(
                'bootstrap.gii'
            ),
            'class' => 'system.gii.GiiModule',
            'password' => 'gii'
        ),
        'shop' => array(
            'debug' => true
        )
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php')
);