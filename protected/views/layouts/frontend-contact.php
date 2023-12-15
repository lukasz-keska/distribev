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
    
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEmGuIceexKma4Q6yyRD8M-KS5vbPtUVM"></script>
 <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/gmap3/7.2.0/gmap3.min.js"></script>-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--<script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>-->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFgIoD1sUAhZe2-sxAkYuN9rdIkz6_xeU" type="text/javascript"></script>-->
    
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

    <title>[[<?php echo $this->pageTitle; ?> - <?php echo get_setting('seo', 'mainTitle'); ?></title>

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
    
<?php include('footer.php'); ?>
    
<?php if(Yii::app()->controller->id=='site' && (Yii::app()->controller->action->id=='about' || Yii::app()->controller->action->id=='contact')): ?>    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOjUkIMMIGdfr-GQUTcTjGuPqbh0y3cR4&callback=initMap" type="text/javascript"></script>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<?php include('cookies.php'); ?>

    
    
    
</body>

</html>