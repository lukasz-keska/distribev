<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <?php if(Yii::app()->controller->id=='site' && Yii::app()->controller->action->id=='contact'): ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/gmap/bootstrap.min.css" rel="stylesheet">   
    <?php else: ?>    
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.4.3.1.css" rel="stylesheet">   
    <?php endif; ?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
    <?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='about' || Yii::app()->controller->action->id=='career')): ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-about.css" rel="stylesheet"/>
    <?php else: ?>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-ub.css" rel="stylesheet"/>
    <?php endif; ?>
    
    <script defer src="/js/cookieconsent/src/cookieconsent.js"></script>
<script defer src="/js/cookieconsent/ub/app.js"></script>
<link rel="icon" type="image/png" href="https://www.unitedbeverages.pl/images/favicon.png" />

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEmGuIceexKma4Q6yyRD8M-KS5vbPtUVM"></script>
 <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/gmap3/7.2.0/gmap3.min.js"></script>-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  
    <!--
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gmap3.min.js"></script>
   -->

   
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

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
    <script src="/js/script.js"></script>    
    <?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='contact' || Yii::app()->controller->action->id=='about')): ?>
        <link href="/css/gmap/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="/js/gmap/gmap3.min.js"></script>    
    <?php endif; ?>
    
    
    
</head>
<body>
    
<?php include('header.php'); ?>
    
<?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='about' || Yii::app()->controller->action->id=='b2b' || Yii::app()->controller->action->id=='contact')): ?>
    <?php echo $content ?>
<?php else: ?>
    <div class="frontend-container <?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='offer' || Yii::app()->controller->action->id=='career')): ?>container-full<?php else: ?>container<?php endif; ?>">
        <!-- CONTENT starts here -->
        <?php echo $content ?>
        <!-- CONTENT ends here -->
    </div>
<?php endif; ?>
    
<footer>
    <div id="bottom-area" class="footer-section">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center flex-md-row flex-column">
                <div class="col-md-4 col-12">
                    <p class="text-left">
                        <span class="font-weight-bold bottom-area-company">UNITED BEVERAGES S.A.</span>
                        <span class="d-flex mt-2 mb-2">ul. Przelot 66<br />
                                            87-100 Toruń<br /><br /></span>

                        <span class="d-flex mt-4 mb-4">tel:&nbsp;695 875 919</span>
                        <span class="d-flex mt-4 mb-4">email: <a href="mailto:office@unitedbeverages.pl" style="margin-left:5px;">office@unitedbeverages.pl</a><br /></span>
                        <span class="d-flex mt-4 mb-4">NIP: 879 22 20 128</span>
                        <span class="d-flex mt-4 mb-4">REGON: 871249854</span>
                        <span class="d-flex mt-4 mb-4">KRS: 0000012645</span>
                        
                    </p>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="img-map-image">
                        <p class="img-map-text">Wybierz jeden <br />z naszych oddziałów</p>
                        <a href="<?=Yii::app()->controller->createUrl('/site/shops')?>" class="text-dark">
                            <img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/mapa.png" class="img-fluid mt-4 mb-4 "/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="text-center d-flex flex-column align-items-start mt-4 mb-4">
                        <a href="<?=Yii::app()->controller->createUrl('/site/about')?>" class="text-dark">O firmie</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/career')?>" class="text-dark">Kariera</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/contact')?>" class="text-dark">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-links">
        <div class="d-flex flex-row">
      
            <a href="/gfx/footer/polityka_prywatnosci.pdf" class="m-2">Polityka Prywatnosci</a>
            <a href="#" class="m-2">Mapa Strony</a>
        </div>
    </div>
</footer>
    
       
<?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='about' || Yii::app()->controller->action->id=='contact')): ?>        
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOjUkIMMIGdfr-GQUTcTjGuPqbh0y3cR4&callback=initMap" type="text/javascript"></script>
<?php endif; ?>

<?php include('cookies.php'); ?>
    
    <?php if(!(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='contact' || Yii::app()->controller->action->id=='about'))): ?>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <?php endif; ?>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    
    
    
    <?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='brands')):  ?>    
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>   
        <script>
         $(document).ready(function(){
             var search_list = {};
             
             
             $('.search-container input').on('keyup', function(e){
                 var _v = $(this).val();
                 if(_v.length>2){
                    $.ajax({
                        type: "POST",
                        url: '/site/search',
                        //contentType:'application/json',
                        data:{q:$(this).val()},
                        success:function(r){
                            var res = JSON.parse(r);
                            var _ul = $('.search-result').children('ul');
                            _ul.children('li').remove();
                            if(!$.isEmptyObject(res)){
                                
                                $.each(res, function(k,v){
                                    _ul.append($('<li data-type="category-'+k+'"></li>').append(
                                        '<a href="/nasze_marki.html?id='+k+'" class="link-cat">'+v.title+'</a>',
                                        $('<ul/>')
                                        ));
                                
                                        $.each(v.categories, function(cid,cat){
                                            
                                            var _subUl = _ul.find('li[data-type="category-'+k+'"]>ul');
                                            _subUl.append($('<li data-type="subcategory-'+cid+'"></li>').append(
                                                '<a href="/nasze_marki.html?id='+k+'&cid='+cid+'" class="link-cat">'+cat.title+'</a>',
                                                $('<ul/>')
                                            ));
                                    
                                                $.each(cat.products, function(pid,prod){
                                                    _subUl.find('li[data-type="subcategory-'+cid+'"]>ul').append(
                                                        '<li><a href="/produkt.html?id='+pid+'" class="link-cat">'+prod+'</a></li>'        
                                                    );
                                                });
                                    
                                        });
                                
                                    
                                    
                                });
                                $('.search-result').show();
                            }else if($.isEmptyObject(res)){
                                $('.search-result').hide();
                            }
                        }
                    });
                 }else{
                     $('.search-result').hide();
                 }
              });
              
              $(document).click(function(){
                  $('.search-container input').val("");
                  $('.search-result').hide();
              })
              
              function orderSearch(){}

              $('.search-container input').on('change', function(e){
                  if($(this).val()==""){
                      search_list = {};
                  }else{

                  }        
              });

         }); 
        </script>
    <?php endif;?>
    
    
</body>

</html>