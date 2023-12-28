<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>DistribEv</title>

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <meta name="keywords" content="">
        <meta name="description" content="DistribEv">
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
        <?=$content?>
    </body>
</html>