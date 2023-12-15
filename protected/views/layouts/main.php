<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo bu(); ?>/_backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo bu(); ?>/_backend/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo bu(); ?>/_backend/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo bu(); ?>/_backend/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- for tiles -->
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

        <!-- include summernote css/js -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php $controller = $this->getId(); ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo url('/backend'); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <?php echo app()->name; ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo user()->name; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Footer-->
                            
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo url('//backend/passwordChange/index'); ?>" class="btn btn-default btn-flat">Zmiana hasła</a>
                                        <a href="<?php echo url('//backend/default/logout'); ?>" class="btn btn-default btn-flat">Wyloguj się</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left info">
                            <p>Witaj, <?php echo user()->name; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-location-arrow"></i> <span>Strony</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/site/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista edytowalnych stron</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-location-arrow"></i> <span>Sklepy i oddziały</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/address/index/type/shop'); ?>"><i class="fa fa-angle-double-right"></i> Lista sklepów</a></li>
                                <li><a href="<?php echo url('/backend/address/index/type/section'); ?>"><i class="fa fa-angle-double-right"></i> Lista oddziałów</a></li>
                                <li><a href="<?php echo url('/backend/address/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj sklep / oddział</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> <span>Kategorie</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/category/index'); ?>"><i class="fa fa-angle-double-right"></i> Kategorie główne</a></li>
                                <li><a href="<?php echo url('/backend/category/index/type/subcategory'); ?>"><i class="fa fa-angle-double-right"></i> Kategorie produktowe</a></li>
                                <li><a href="<?php echo url('/backend/category/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj kategorię</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> <span>Produkty</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/products/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista produktów</a></li>
                                <li><a href="<?php echo url('/backend/products/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj produkt</a></li>
                                <li><a href="<?php echo url('/backend/productSpecification/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista atrybutów</a></li>
                                <li><a href="<?php echo url('/backend/productSpecification/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj atrybut</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-bell-o"></i> <span>Aktualności</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/news/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista</a></li>
                                <li><a href="<?php echo url('/backend/news/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj news</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-picture-o"></i> <span>Katalogi</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/catalog/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-picture-o"></i> <span>Inne</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/settings/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista ustawień</a></li>
                                <li><a href="<?php echo url('/backend/settings/update/slug/bannertext'); ?>"><i class="fa fa-angle-double-right"></i> Napis na bannerze głównym</a></li>
                                
                            </ul>
                        </li>
                        <!--
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-picture-o"></i> <span>Banery</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/promotion/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista</a></li>
                                <li><a href="<?php echo url('/backend/promotion/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj baner</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Kontakt</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/contact/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista</a></li>
                                <li><a href="<?php echo url('/backend/contact/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj kontakt</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-list"></i> <span>Menu</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/menuItem/index'); ?>"><i class="fa fa-angle-double-right"></i> Lista</a></li>
                                <li><a href="<?php echo url('/backend/menuItem/create'); ?>"><i class="fa fa-angle-double-right"></i> Dodaj element</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Popup</span>
                            </a>
                            <ul class="treeview-menu ">
                                <li><a href="<?php echo url('/backend/popup/index'); ?>"><i class="fa fa-angle-double-right"></i> Zarządzaj</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="<?php echo url('/backend/default/settings');?>">
                                <i class="fa fa-wrench"></i> <span>Ustawienia</span>
                            </a>
                        </li>-->
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">
                    
                    <?php echo $content; ?>
                    
                 </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <?php cs()->registerScriptFile(bu().'/_backend/js/bootstrap.min.js', CClientScript::POS_END); ?>     
        <?php cs()->registerScriptFile(bu().'/_backend/js/AdminLTE/app.js', CClientScript::POS_END); ?>


    </body>
</html>  
