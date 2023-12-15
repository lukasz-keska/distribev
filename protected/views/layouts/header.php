<?php

    clearstatcache();
    if(Yii::app()->controller->action->id == 'promotions' && !empty(Yii::app()->request->getParam('slug'))){
        $headerLogoUrl = '/gfx/headers/header_'.Yii::app()->controller->id.'_'.Yii::app()->controller->action->id.'_'.Yii::app()->request->getParam('slug');
    }else{
        $headerLogoUrl = '/gfx/headers/header_'.Yii::app()->controller->id.'_'.Yii::app()->controller->action->id;
    }

    if(file_exists($_SERVER['DOCUMENT_ROOT'].$headerLogoUrl.'.png')){
        $headerLogoUrl .= '.png';
    }else if(file_exists($_SERVER['DOCUMENT_ROOT'].$headerLogoUrl.'.jpg')){
        $headerLogoUrl .= '.jpg';
    }else{
        $headerLogoUrl = '';
    }        


?>
    
<style>
    .header-logo {
        background-image: url("<?=$headerLogoUrl;?>");
        background-size: cover;
        height: 500px;
        position: relative;
    }

    #menu-container, #menu-container>li>ul {
        display: block;
        width: 100%;
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: fixed;
        top: 0px;
        z-index: 1100;
    }


    .header-menu{
        height: 87px !important;
    }

    #menu-container ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: none;
      height: 200px;
    }

    #menu-container li {
      float: left;
    }

    #menu-container li a, #menu-container .dropbtn {
      display: inline-block;
      color: #000;
      text-align: center;
      text-decoration: none;
    }

    #menu-container li:not(.mlogo){
        font-size:21px !important;
        margin-top: 8px;
        margin-right: 35px;
    }

    #menu-container>ul>li:not(.mlogo)>a{
        font-size:21px !important;
        letter-spacing: 1px !important;
        font-weight: 400 !important;
        line-height: 1.5 !important;
        font-family: 'Lato', sans-serif;
    }

    #menu-container li:not(.mlogo) a, #menu-container .dropbtn{
          padding: 14px 16px;
          letter-spacing: 1px !important;
    }

    #menu-container li a:hover, #menu-container .dropdown:hover #menu-container .dropbtn {
        color:#FFF !important;
        background-color: #b00715;
    }

    #menu-container li.dropdown {
      display: inline-block;
    }

    #menu-container .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    #menu-container .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    #menu-container .dropdown-content a:hover {background-color: #b00715;}

    #menu-container .dropdown:hover .dropdown-content {
      display: block;
    }
    
    button.hamburger{
        display:none;
        position: absolute;
        left: 2px;
        top: 5px;
        font-size: 30px;
        color: #b00715;
        cursor:pointer !important;
    }
    
    
    @media screen and (max-width: 580px)
    {
        
        button.hamburger{
            display:block;
        }
        
        #menu-container ul{
            height:335px;
        }
        
        #menu-container li{
            float:none;
            background-color:#FFF;
        }
        
        #menu-container>ul>li:last-of-type{
            margin-top:110px !important;
        }
        
        #menu-container li.dropdown{
            display:block;
        }
        
        #menu-container li.mlogo{
            float: right;
        }
        
        #menu-container li.mlogo img{
            width:170px !important;
        }
        
        #menu-container>ul>li.ofirmie{
            margin-top: 60px !important;
        }
        
        #menu-container>ul>li:not(.mlogo){
            width: 160px;
            margin-top: 0px;
            float:none;
            display:none;
        }
        
        #menu-container>ul>li:not(.mlogo)>a{
            font-size:18px !important;
            width: 100%;
            text-align: left;
        }
        
        #menu-container .dropdown-content{
            display: block;
            font-size:18px !important;
            box-shadow:none;
            background-color:#FFF;
        }
    }
    
</style>


<header>
     <div id="menu-container">
         
         <button class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class=""><i class="fas fa-bars fa-1x"></i></span></button>
         
        <ul>
            <li class="mlogo"><a href="<?=Yii::app()->controller->createUrl('site/main'); ?>"><img src="<?=Yii::app()->request->baseUrl; ?>/gfx/logo-alcotrade.jpg" style="width: 230px; height: auto;" /></a>
                
                    </li>
  <li class="ofirmie"><a href="<?=Yii::app()->controller->createUrl('site/about'); ?>">O firmie</a></li>
  <li class="ofirmie"><a href="<?=Yii::app()->controller->createUrl('site/brands'); ?>">Nasze marki</a></li>
  <li class="dropdown">
    <a href="<?=Yii::app()->controller->createUrl('site/promotions'); ?>" class="dropbtn">Oferta</a>
    <div class="dropdown-content">
      <a href="<?=Yii::app()->controller->createUrl('site/promotions/slug/shopsdetal')?>">Detal</a>
      <a href="<?=Yii::app()->controller->createUrl('site/promotions/slug/horeca')?>">HoReCa</a>
    </div>
  </li>
  <li class="kontakty"><a href="<?=Yii::app()->controller->createUrl('site/contact'); ?>">Kontakty</a></li>
</ul>
                
        
        
        
    </div>
<div id="header" class="header-logo">
   
    <div class="header-menu">
        <div class="container-full">
            <div class="container">
                
            </div>
            
        </div>
    </div>
</div>
 
</header>

<script>
    
    $(document).ready(function(){
        $('.hamburger').on('click',function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $('#menu-container>ul>li:not(.mlogo)').hide();
            }else{
                $(this).addClass('active');
                $('#menu-container>ul>li:not(.mlogo)').show();
            }
        })
    });
    
</script>