<!DOCTYPE html>
<html class="bg-black">
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
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <?php echo $content; ?>


        <?php cs()->registerScriptFile(bu().'/_backend/js/bootstrap.min.js', CClientScript::POS_END); ?>     
        <?php cs()->registerScriptFile(bu().'/_backend/js/AdminLTE/app.js', CClientScript::POS_END); ?>
   

    </body>
</html>