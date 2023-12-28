<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>DistribEv</title>

        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="loading-background">
            <div class="loading-top">
            </div>
            <div class="age-wrapper">
                <div class="age text-center">
                    <div class="age-in">
                    	
                        <h1>Serdecznie witamy w serwisie internetowym
                            United Beverages.</h1>
                        <p>Jednocześnie uprzejmie informujemy, że dane zawarte w serwisie United Beverages są przeznaczone jedynie do celów handlowych i informacyjnych pomiędzy podmiotami zajmującymi się produkcją, obrotem i handlem napojami alkoholowymi i przeznaczone są <b>wyłącznie dla osób pełnoletnich.</b></p>
                        <a href="google.pl" class="a-out">Wyjście z serwisu</a>
                        <a href="<?php echo url('/site/main'); ?>" class="a-in">Wejście do serwisu internetowego</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    </body>
</html>