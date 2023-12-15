<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'ARB+',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	'contactEmail'=>'kontakt@arbplus.pl',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	// the copyright information displayed in the footer section
	'copyrightInfo'=>'Copyright &copy; 2009 by My Company.',
        'giftsCategoryId' => 89,
        'db_ub' => array(
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
        )
);
