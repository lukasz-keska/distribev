<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>United Beverages</title>

        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <meta name="keywords" content="<?php echo get_setting('seo', 'mainKeywords'); ?>">
        <meta name="description" content="<?php echo get_setting('seo', 'mainDescription'); ?>">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<style>
		.fulljustify {
		  margin-bottom: 0;
		}
		.fulljustify:after {
		  content: "";
		  display: inline-block;
		  width: 100%;
		}

        a:hover {
            text-decoration: none;
        }

        p {
            margin: 0px 0px 30px;;
        }

		@media screen and (max-width: 768px)
		{
			.fulljustify 
			{
				height: auto;
			}
			.fulljustify:after 
			{
				display: block;
				
			}
		}
		</style>
    </head>
    <body>
        <div class="loading-background">
            <div class="loading-top">
            </div>
            <div class="age-wrapper">
                <div class="age text-center">
                    <div class="age-in" style="background: #fff">
                        <p style="color: black;">Serdecznie witamy w serwisie internetowym United Beverages. Jednocześnie uprzejmie informujemy, że dane zawarte w serwisie United Beverages S.A. są przeznaczone jedynie do celów handlowych i informacyjnych pomiędzy podmiotami zajmującymi się produkcją, obrotem i handlem napojami alkoholowymi i przeznaczone są <b>wyłącznie dla osób pełnoletnich.</b></p>
                        <div class="visible-xs">
                            <a href="<?php echo url('//site/index'); ?>" class="a-in btn-block">Wejście</a>
                            <a href="http://google.pl/" class="a-out btn-block text-left">Wyjście</a>
                        </div>
                        <div class="hidden-xs">
						  <div class="col-md-6"><a href="http://google.pl/" class="a-out">Wyjście</a></div>
                          <div class="col-md-6"><a href="<?php echo url('//site/index'); ?>" class="a-in">Wejście</a></div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>