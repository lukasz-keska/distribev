<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <?php if(Yii::app()->controller->id=='site' && Yii::app()->controller->action->id=='contact'): ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/gmap/bootstrap.min.css" rel="stylesheet">   
    <?php else: ?>    
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.4.3.1.css" rel="stylesheet">   
    <?php endif; ?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
    <?php if(Yii::app()->controller->id=='site' && Yii::app()->controller->action->id=='about'): ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-about.css" rel="stylesheet"/>
    <?php else: ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-ub.css" rel="stylesheet"/>
    <?php endif; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEmGuIceexKma4Q6yyRD8M-KS5vbPtUVM"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gmap3/7.2.0/gmap3.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <meta name="keywords" content="<?php echo get_setting('seo', 'mainKeywords'); ?>"/>
    <meta name="description" content="<?php echo get_setting('seo', 'mainDescription'); ?>"/>

    <title><?php echo $this->pageTitle; ?> - <?php echo get_setting('seo', 'mainTitle'); ?></title>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69231600-1', 'auto');
      ga('send', 'pageview');

    </script>
    
   
    
    <style>
        .header-logo {
            height: 57px !important;
            position: relative;
            
        }
        
        body{
            overflow:auto;
            overflow-x:hidden;
            overflow-y:auto;
        }
        
        @media (max-width:700px){
            body{
                overflow-x:auto;
            }
        }
    </style>
    
    
</head>
<body>
<header>

    <?php include('header.php'); ?>

    <?php echo $content ?>
    
    
    
    
<footer>
    <div id="bottom-area" class="footer-section">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center flex-md-row flex-column">
                <div class="col-md-4 col-12">
                    <p class="text-left">
                        <span class="font-weight-bold bottom-area-company">UNITED BEVERAGES S.A.</span>
                        <span class="d-flex mt-2 mb-2">ul. Przelot 66<br />
                                            87-100 Toruń<br /><br /></span>

                        <span class="d-flex mt-4 mb-4">tel: 695 875 919<br />
                                            <br /><br /></span>
                        NIP: 879 22 20 128
                    </p>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="img-map-image">
                        <p class="img-map-text">Wybierz jeden <br />z naszych oddziałów</p>
                      
                        <img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/mapa.png" class="img-fluid mt-4 mb-4 "/>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="text-center d-flex flex-column align-items-start mt-4 mb-4">
                        <a href="#" class="text-dark">O firmie</a>
                        <a href="#" class="text-dark">Odpowiedzialny biznes</a>
                        <a href="<?=Yii::app()->controller->createUrl('site/career')?>" class="text-dark">Kariera</a>
                        <a href="<?=Yii::app()->controller->createUrl('site/contact')?>" class="text-dark">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex flex-row footer-links">
            <a href="#" class="m-2">Zastrzezenia Prawne</a>
            <a href="#" class="m-2">Polityka Prywatnosci</a>
            <a href="#" class="m-2">Mapa Strony</a>
        </div>
    </div>
</footer>

    <?php include('cookies.php'); ?>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    
    
    
</body>

</html>