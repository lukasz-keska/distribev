<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_styles.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <meta name="keywords" content="<?php echo get_setting('seo', 'mainKeywords'); ?>">
    <meta name="description" content="<?php echo get_setting('seo', 'mainDescription'); ?>">

    <title><?php echo $this->pageTitle; ?> - <?php echo get_setting('seo', 'mainTitle'); ?></title>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69231600-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>

    <?php $ofertaWeselna = CHtml::image(Yii::app()->request->baseUrl.'/gfx/oferta-weselna.png', 'Oferta Weselna');

    echo CHtml::link($ofertaWeselna,  Yii::app()->baseUrl . '/pdf/wedding.pdf', array('class' => 'listewka1', "target"=>"_blank"))
    ?>
    <?php $czasNaWino = CHtml::image(Yii::app()->request->baseUrl.'/gfx/czas-na-wino.png', 'Czas na wino');

    echo CHtml::link($czasNaWino,  Yii::app()->baseUrl . '/pdf/czas-na-wino.pdf', array('class' => 'listewka2', "target"=>"_blank"))
    ?>

<nav class="top-navigation hidden-xs<?=(Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id=='index')?'':' fix'?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-4">
                <a href="<?php echo url('//site/index'); ?>"><img
                        src="<?php echo Yii::app()->request->baseUrl; ?>/gfx/logo.png" class="img-responsive logo" alt="logo"></a>
            </div>
            <div class="col-sm-9 col-lg-8">
                <ul class="text-right main-ul">
                    <li class="our-brands submenu-block">
                        <ul>
                            <?php
                            $categories = Category::model()->findAll('parent_id = 0');
                            
                            $categoriesTemp = array();  
                            $rum = array();
                            foreach($categories as $k=>&$c){

                                if($c->category_id==61){
                                    $rum = $c;                                                
                                }else{
                                    $categoriesTemp[] = $c;
                                }

                            }                            

                            $categories = array();    
                            foreach($categoriesTemp as $cat){                                            
                                $categories[]=$cat;
                                if($cat->category_id==3){
                                    $categories[] = $rum;
                                }
                            };                            
                            
                            foreach ($categories as $category):
                                ?>
                                <li><a href="<?php echo $category->getUrl(); ?>"><?php echo $category->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php
                    $menu = MenuItem::model()->findAll(array('order' => 'sort ASC'));
                    foreach ($menu as $item):
                        ?>
                        <li>
                            <a href="<?php echo bu($item->url); ?>" <?php echo $item->show_categories ? 'id="our-brands"' : ''; ?>>
                                <?php if ($item->show_categories): ?>
                                    <span class="triangle-top"></span>
                                <?php endif; ?>
                                <span class="link-title"><?php echo $item->title; ?></span>
                                <span class="link-description"><?php echo $item->subtitle; ?></span>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="mobile-navigation visible-xs">
    <a class="mobile-menu-button dt" href="#">
        <div class="dtc"><img src="<?php echo Yii::app()->request->baseUrl; ?>/gfx/hamburger.png"></div>
    </a>
</nav>
<div class="mobile-menu-blue hidden hidden-sm hidden-md hidden-lg">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">

                <?php
                $menu = MenuItem::model()->findAll(array('order' => 'sort ASC'));
                foreach ($menu as $item):
                    ?>
                    <?php if (!$item->show_categories): ?>
                    <li>
                        <a href="<?php echo bu($item->url); ?>">
                            <?php echo $item->title; ?>
                        </a>
                    </li>
                <?php else: ?>

                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <?php echo $item->title; ?>
                        </a>

                        <!-- Dropdown level 1 -->
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <?php
                                    $categories = Category::getChilds(0);
                                                  
                                    
                                                            
                                    //if($_SERVER['REMOTE_ADDR']=='46.170.236.99'){
                                        
                                        $categoriesTemp = array();  
                                        $rum = array();
                                        foreach($categories as $k=>&$c){
                                            
                                            if($c['id']==61){
                                                $rum = $c;                                                
                                            }else{
                                                $categoriesTemp[] = $c;
                                            }
                                            
                                        }                            
                                            
                                        $categories = array();    
                                        foreach($categoriesTemp as $cat){                                            
                                            $categories[]=$cat;
                                            if($cat['id']==3){
                                                $categories[] = $rum;
                                            }
                                        };
                                    //}
                                    
                                    
                                     
                                    
                                    foreach ($categories as $cat): ?>
                                    
                                    
                                    
                                    
                                    
                                        <?php if (!empty($cat['children']) || !empty($cat['products'])): ?>
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-<?php echo $cat['id']; ?>">
                                                    <?php echo $cat['title']; ?>
                                                </a>

                                                <div id="dropdown-<?php echo $cat['id']; ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <?php if (!empty($cat['children'])): ?>
                                                            
                                                                        <?php foreach ($cat['children'] as $child): ?>
                                                                                <li class="panel panel-default" id="dropdown">
                                                                                <a data-toggle="collapse" href="#dropdown-<?php echo $child['id']; ?>">
                                                                                    <?php echo $child['title']; ?>
                                                                                </a>

                                                                                <div id="dropdown-<?php echo $child['id']; ?>"
                                                                                class="panel-collapse collapse">
                                                                                <?php if (!empty($child['products'])): ?>
                                                                                    <div class="panel-body">
                                                                                        <ul class="nav navbar-nav">
                                                                                        <?php foreach ($child['products'] as $prod): ?>
                                                                                            <li>
                                                                                                <?php echo CHtml::link($prod->title,
                                                                                                    $prod->getUrl()); ?>
                                                                                            </li>
                                                                                        <?php endforeach; ?>
                                                                                    </ul>
                                                                                        </div>
                                                                                <?php endif; ?>
                                                                                    </div>
                                                                            </li>
                                                                        <?php endforeach; ?>

                                                            <?php endif; ?>

                                                            <?php if (!empty($cat['products'])): ?>
                                                                <?php foreach ($cat['products'] as $prod): ?>
                                                                    <li>
                                                                        <?php echo CHtml::link($prod->title,
                                                                            $prod->getUrl()); ?>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php else: ?>
                                            <li>
                                                <a href="<?php echo $cat['url']; ?>">
                                                    <?php echo $cat['title']; ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php endforeach; ?>
                <!-- Dropdown-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>

    
    <div class="container" id="main-container">
        <section id="header" class="header-logo"></section>
<!-- CONTENT starts here -->
<?php echo $content ?>
<!-- CONTENT ends here -->

        <section id="bottom-area">
            
        </section>
    </div>
 <footer>
        <div class="container">
            
            
            <div class="row footer-section">
                <div class="d-flex align-items-center justify-content-center footer-content flex-md-row flex-column">
                    <div class="col-md-4 col-12 address-data">
                        <p class="text-left">
                        <span class="font-weight-bold bottom-area-company">UNITED BEVERAGES S.A.</span>
                        <div class="d-flex mt-2 mb-2">ul. Płaska 24-36</div>
                        <div class="d-flex mt-2 mb-2">87-100 Toruń</div>
                        <br />
                        <div class="d-flex mt-4 mb-4">tel: 695 875 919</div>
                        <div class="d-flex mt-4 mb-4">fax: 56 655 03 66</div>
                        <br />
                        <div class="d-flex mt-4 mb-4">NIP: 879 22 20 128</div>
                        </p>
                    </div>
                    <div class="col-md-4 col-12 text-center footer-map">
                        <div class="img-map-image">
                            <p class="img-map-text">Wybierz jeden <br />z naszych oddziałów</p>
                            <img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/mapa.png" class="img-fluid mt-4 mb-4 "/>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 footer-links-container">
                        <div class="text-center d-flex flex-column align-items-start mt-4 mb-4 footer-links">
                            <a href="#" class="text-dark">O firmie</a>
                            <a href="#" class="text-dark">Odpowiedzialny biznes</a>
                            <a href="#" class="text-dark">Kariera</a>
                            <a href="#" class="text-dark">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-wrapper">
                
                
                
                <div class="row">
       
                    <a href="#" class="m-2">Zastrzeżenia Prawne</a>
                    <a href="#" class="m-2">Polityka Prywatności</a>
                    <a href="#" class="m-2">Mapa Strony</a>

                </div>
            </div>
        </div>

</footer>
    
<footer data-type="old" style="display:none;">
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-xs-12 visible-xs">
                    <a href="<?php echo url('//site/where'); ?>" class="title">Gdzie kupić? ></a>

                    <div id="mapka1" style="width: 100%; height: 100px; background: gray; margin-bottom: 10px;"></div>
                </div>
                <div class="col-sm-2 col-xs-6">

                    <ul>


                        <?php foreach ($menu as $item):
                            ?>
                            <li>
                                <a href="<?php echo bu($item->url); ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
				<!--
                <div class="col-sm-4 hidden-xs">
                    <a href="<?php echo url('//site/where'); ?>" class="title">Gdzie kupić? ></a>

                    <div id="mapka2" style="width: 100%; height: 100px; background: gray;"></div>
                </div>
				-->
                <div class="col-sm-3 col-xs-6">
                    <span class="title"><?php echo get_setting('footer', 'footerCompanyName'); ?></span>
                    <span><?php echo get_setting('footer', 'footerStreet'); ?></span>
                    <span><?php echo get_setting('footer', 'footerPost'); ?></span>
                    <span><b>TEL:</b> <?php echo get_setting('footer', 'footerPhone'); ?></span>
                    <span><b>FAX:</b> <?php echo get_setting('footer', 'footerFax'); ?></span>
                    <span><b>NIP:</b> <?php echo get_setting('footer', 'footerNip'); ?></span>
                </div>
                                
                <style>
                    .button_blue{
                        display: block;
                        height: 50px;
                        background-color: #303361;
                        color: #FFF !important;
                        font-size: 17px !important;
                        margin-bottom: 10px;                       
                        text-align: center;
                        padding-top: 11px;
                    }
                </style>                
                                
                <div class="col-sm-3 col-xs-12">
                    
                    
                <?php echo CHtml::link('Katalog produktów',  array('//site/catalog'), array('class'=>'button_blue')); ?>
                    
                    
                <?php echo CHtml::link('Bezpieczeństwo',  array('//site/bezpieczenstwo'), array('class'=>'button_blue')); ?>    
                    
                    
                    
                <?php /*$katalog = CHtml::image(Yii::app()->request->baseUrl.'/gfx/katalog-produktow.png', 'Katalog produktów');
                    echo CHtml::link($katalog,  array('//site/catalog'))
                ?>
                    
                <?php $katalog = CHtml::image(Yii::app()->request->baseUrl.'/gfx/bezpieczenstwo.png', 'Bezpieczeństwo');
                    echo CHtml::link($katalog,  array('//site/bezpieczenstwo'))*/
                ?>
    
                </div>
                <div class="col-sm-3 col-xs-12 text-right">
                    <span><?php echo get_setting('footer', 'footerCopy'); ?></span>
                    <a href="http://www.buzzgroup.eu/" target="_blank">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/gfx/buzzgroup.png" class="buzzgroup"
                             alt="buzzgroup"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->widget('ext.CookieMonster.CookieMonster', array(
 'content' => array(
        'mainMessage' => 'Ta strona wykorzystuje pliki cookies, korzystanie z niej oznacza zgodę na ich zapis w Twoim urządzeniu. Jeśli nie zgadzasz się na to zmień ustawienia cookies w przeglądarce.',
        'buttonMessage' => 'Rozumiem', // instead of default 'I understand'
    ),
    'mode' => 'bottom'
)); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">

    jQuery(window).load(function () {
        
        function mapaStart(id) {
            var wspolrzedne = new google.maps.LatLng(<?php echo get_setting('footer', 'footerLatLang'); ?>);
            var opcjeMapy = {
                zoom: 15,
                center: wspolrzedne,
                disableDefaultUI: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var mapa = new google.maps.Map(document.getElementById("mapka" + id), opcjeMapy);
            var marker = new google.maps.Marker({
                position: wspolrzedne,
                title: "Hello World!"
            });
            marker.setMap(mapa);
        }

        mapaStart("1");

        $("#our-brands")
            .on("mouseenter", function () {
                $('.our-brands').show();
                $('.triangle-top').show();
            })
            .on("mouseleave", function () {
                $('.our-brands').hide();
                $('.triangle-top').hide();
                ;
            });
        $(".our-brands")
            .on("mouseenter", function () {
                $('.our-brands').show();
                $('.triangle-top').show();
            })
            .on("mouseleave", function () {
                $('.our-brands').hide();
                $('.triangle-top').hide();
            });
        $(".mobile-menu-button").click(function (e) {
            if ($(".mobile-menu-blue").hasClass("hidden")) {
                $(".mobile-menu-blue").removeClass("hidden");
                $(".mobile-menu-blue").addClass("visible");
            }
            else {
                $(".mobile-menu-blue").removeClass("visible");
                $(".mobile-menu-blue").addClass("hidden");
            }

        });
    });
</script>
</body>
</html>