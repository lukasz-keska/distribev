<?php
/**
 * @var $product Products[]
 */

$this->pageTitle = $product->title;


?>


        
<style>
    
.breadcrumbs {
    padding: 0;
    margin-top: 21px;
}

.breadcrumbs li {
    list-style: none;
    font-size: 14px;
    margin: 20px 10px 20px 0;
}

.breadcrumbs li a {
    color: #000;
}

.header-logo {
        background-image: none;
        background-size: cover;
        height: 100px;
        position: relative;
   }
   
   .product-title{
       font-weight:bold;
       font-size:30px;
   }
    
   .product-specification{
       font-size:12px;
       color:#b0b5b9;
   }
   
   .alcolevel{
       text-align:right;
   }
   
   .alcolevel>*{
       display:inline-block;
   }
   
   .alcolevel>i{
        border: 1px solid #b0b5b9;
        border-radius: 40px;
        width: 20px;
        text-align: center;
        margin-right: 4px;
   }
   
   .bottles{
       padding-left: 0px;
   }
   
   .bottles span{
       margin-right:5px;
   }
   
/*   .product-col{
        margin-left: -30px;
   }*/
   
/*   .product-description{
       margin-top: 20px;
   }*/
   
   .product-description>.col-sm-6:first-of-type{
       padding-left:0px;
   }
   
   .short-description{
        background-color: #d9d7d7;
        border-radius: 0px 25px 0px 25px;
/*        padding: 15px;*/
        position: relative;
/*        padding-bottom: 40px;*/
   }
   
   .product-options{
        font-size: 14px;
        position: relative;
        top: -27px;
   }
   
   .product-options .where-buy{
        color: #fff;
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#002f53+0,008496+51,002f53+100 */
         background: #b00715; /* Old browsers */
    background: -moz-linear-gradient(left, #b00715 0%, #e35f71 49%, #e35f71 51%, #b00715 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #b00715 0%,#e35f71 49%,#e35f71 51%,#b00715 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #b00715 0%,#e35f71 49%,#e35f71 51%,#b00715 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b00715', endColorstr='#b00715',GradientType=1 ); /* IE6-9 */
        border: 0;
        border-radius: 0px 0px 0px 25px;
        padding-top: 7px;
        padding-left: 30px;
        padding-bottom: 10px;
   }
   
   .product-options .where-buy a{
       color: #000 !important;
       text-decoration:none;
   }
   
   .product-options i{
       margin-left:5px;
   }
   
   .product-options .download{
        background-color: #d9d7d7;
        color: #002f53;
/*        height: 35px;*/
       padding-top: 7px;
       padding-bottom: 10px;
       /* padding-left: 22px;*/
        text-decoration:none;
   }
   
   .product-options .download a{
       color: #002f53;
       text-decoration:none;
   }
   
   .other-products{
       background-color: #FFF;
   }
   
   .other-products.p-top{
       margin-top: 30px;
       border-bottom: 1px solid #e3e3e3;
   }
   
   .other-products-title{
        font-size: 15px;
        font-weight: bold;
        padding-top: 7px;
        height: 40px;
   }
   
   .other-products-list>a:not(:last-of-type){
       border-right: 1px solid #e3e3e3;
   }
   
   .other-products-list>a{
        text-align: center;
        min-width: 150px;
        display: inline-block;
        padding: 20px;
   }
   
   .other-products-list>a>p{
       font-weight:bold;
       font-size:10px;
       margin-top: 10px;
       color:#000;
       text-decoration:none;
   }
   
   .other-products-list>a:hover{
       text-decoration:none;
   }
   
   .header-logo{
       height:60px;
   }
   
   li.return{
            width: 236px;
        position: relative;
        top: -20px;
        cursor:pointer;
   }
   
   li.return .row{
        position: fixed;
        z-index: 200;
        margin-left: 30px;
   }
   
   li.return .returnContainer{
        width: 144px;
        height: 55px;
        color: #fff;
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#002f53+0,008496+51,002f53+100 */
        background: #b00715; /* Old browsers */
    background: -moz-linear-gradient(left, #b00715 0%, #e35f71 49%, #e35f71 51%, #b00715 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #b00715 0%,#e35f71 49%,#e35f71 51%,#b00715 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #b00715 0%,#e35f71 49%,#e35f71 51%,#b00715 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b00715', endColorstr='#b00715',GradientType=1 ); /* IE6-9 */
        border: 0;
        border-radius: 0px 0px 0px 25px;
        padding-top: 7px;
   }
   
   
   .return .arrow, .return .back2{
       display:inline-block;
   }
   
   .return .arrow{
       font-size: 17px;
        margin-left: 20px;
        margin-right: 10px;
        top: -10px;
        position: relative;
   }
   
   .return .back2{
        width: 80px;
        font-weight: bold;
   }
   
      .other-products{
       background-color: #FFF;
        border-bottom: 1px solid #e3e3e3;
   }
   
   .other-products.p-top{
       margin-top: 30px;
   }
   
   .other-products-title{
        font-size: 15px;
        font-weight: bold;
        padding-top: 7px;
        height: 40px;
   }
   
    .other-products-row {
border-bottom: 1px solid #e3e3e3;
   }

   .other-products-list {
       font-weight:bold;
       font-size:10px;
       padding-top: 10px;
      text-decoration:none;
       color:#000;
      text-align: center;
   }
   
  /*.other-products-list-border-a {
//border-left: 1px solid #e3e3e3;
//border-right: 1px solid #e3e3e3;
   }

  .other-products-list-border-b {
//border-right: 1px solid #e3e3e3;
   }*/
   
   
   @media (max-width:770px){
       #content .breadcrumbs{
           display:none !important;
       }
   }
   
</style>

<div id="content" class="content-bg">

            <ul class="d-flex breadcrumbs">
                <li class="return">
                    <div class="container">
                      <div class="row">
                        <div class="returnContainer"><i class="fas fa-arrow-left arrow"></i>
                          <div class="back2">Wróć do listy marek
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands')?>">Nasze Marki</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands',['id'=>$mainCategory->category_id])?>"><?=$mainCategory->title?></a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands',['id'=>$mainCategory->category_id, 'cid' =>$category->category_id])?>"><?=$category->title?></a></li>
                
            </ul>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                 <img src="<?=$product->file_ub->getUrl('large')?>" />
            </div>
            <div class="col-sm-9 col-12 pl-5 pr-3 product-col">
                <div class="row product-title"><?=$product->title;?></div>
                
                <?php
                   
                    $bottles = [];
                    $alcoLevel = '';
                    if(!empty($product->specifications)){
                        if(isset($product->specifications[$specs['capacity']['id']]))
                            $bottles = preg_split('/[|;]/',$product->specifications[$specs['capacity']['id']]);
                        if(isset($product->specifications[$specs['alcolevel']['id']]))
                            $alcoLevel = $product->specifications[$specs['alcolevel']['id']];
                    }                    
                ?>
                
                <div class="row product-specification<?=((!empty($product->specifications))?'':' hidden')?>">
                    
                    <div class="col-sm-8 col-12 bottles">
                        <span>Zawartość alkoholu: <?=$alcoLevel?><?php if(!empty($bottles)): ?>%, <?php endif;?></span>
                        <?php if(!empty($bottles)): ?>Dostępne pojemności:<?php endif;?>
                        <?php foreach($bottles as $b): ?>
                                    <span><?=(!preg_match('/[l,L]$/',$b))?$b.'l':strtolower($b);?></span>
                        <?php endforeach; ?>             
                    </div>
                    
                </div>
                
                <div class="row product-description mt-4 pr-2">
                                        
                    <div class="col-sm-6 pr-4">
                        <?=$product->description?>               
                    </div>
                    <div class="col-sm-6">
                        <div class="row short-description pl-3 pr-3 pt-3 pb-5">
                            <?=$category->description?>
                        </div>
                        <div class="row product-options">
                            <div class="col-sm-6 where-buy"><a href="<?=Yii::app()->controller->createUrl('site/shops')?>">Sprawdź gdzie kupić <i class="fas fa-arrow-right"></i></a></div>
                            <div class="col-sm-6 download"><?php if($product->fileupload_ub->hasFile()): ?><a href="http://www.unitedbeverages.pl/<?=$product->fileupload_ub->getFileUrl()?>" target="_blank">Pobierz kartę produktu <i class="fa fa-download" aria-hidden="true"></i></a><?php endif; ?></div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
    
    
        
    
    
    <!--
    
            <ul class="d-flex breadcrumbs">
                <li class="return">
                    <div class="container"><div class="row"><div class="returnContainer"><i class="fas fa-arrow-left arrow"></i><div class="back">Wróć do listy marek</div></div></div></div>
                </li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands')?>">Nasze Marki</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands',['id'=>$mainCategory->category_id])?>"><?=$mainCategory->title?></a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/brands',['id'=>$mainCategory->category_id, 'cid' =>$category->category_id])?>"><?=$category->title?></a></li>
                
            </ul>
    
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-12">
                <img src="<?=$product->file_ub->getUrl('large')?>" />
            </div>
            <div class="col-sm-9 col-12 product-col">
                <div class="row product-title">
                    <?=$product->title;?>
                </div>
                
                <?php
                   
                    $bottles = [];
                    $alcoLevel = '';
                    if(!empty($product->specifications)){
                        if(isset($product->specifications[$specs['capacity']['id']]))
                            $bottles = preg_split('/[|;]/',$product->specifications[$specs['capacity']['id']]);
                        if(isset($product->specifications[$specs['alcolevel']['id']]))
                            $alcoLevel = $product->specifications[$specs['alcolevel']['id']];
                    }                    
                ?>
                
                
                <div class="row product-specification<?=((!empty($product->specifications))?'':' hidden')?>">
                    <div class="col-sm-8 col-12 bottles">
                        
                            <?php foreach($bottles as $b): ?>
                                <span><?=(!preg_match('/[l,L]$/',$b))?$b.'l':strtolower($b);?></span>
                            <?php endforeach; ?>
                     
                    </div>
                    <div class="col-sm-4 col-12 alcolevel">
                        <i>%</i><span>Zawartość alkoholu: <?=$alcoLevel?></span>
                    </div>
                </div>
                <div class="row product-description">
                    
                    
                    <div class="col-sm-6">
                        <?=$category->description?>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="row short-description">
                            <?=$product->description?>
                        </div>
                        <div class="row product-options">
                            <div class="col-sm-6 where-buy"><a href="<?=Yii::app()->controller->createUrl('site/shops')?>">Sprawdź gdzie kupić <i class="fas fa-arrow-right"></i></a></div>
                            <?php if($product->fileupload_ub->hasFile()): ?><div class="col-sm-6 download"><a href="<?=$product->fileupload_ub->getFileUrl()?>">Pobierz kartę produktu <i class="fa fa-download" aria-hidden="true"></i></a></div><?php endif; ?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    
    -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>

</div><!-- zamykamy kontener z layoutu -->




<div class="container-full other-products p-top<?php if(!count($products)): ?> hidden<?php endif; ?>"><!-- otwieramy pelnoekranowy kontener -->
    <div class="container pl-5">
        <div class="row other-products-title">
            Pozostałe produkty marki
        </div>
    </div>
</div>
<div class="container-full other-products"><!-- otwieramy pelnoekranowy kontener -->
    <div class="container">
        <div class="row other-products-row">
                        
            <?php foreach($products as $i=>$p): ?>
                <div class="col-md-3 col-12 other-products-list<?php if($i>0 && isset($products[$i+1])): ?> other-products-list-border-a<?php endif; ?>">
                    <a href="/produkt.html?id=<?=$p->product_id?>">
                        <img src="<?=$p->file_ub->getUrl('thumb'); ?>" style="height:225px;" />
                        <p><?=$p->title; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
            
                        
        </div>
    </div>







<!--
<div class="container-full other-products p-top<?php if(!count($products)): ?> hidden<?php endif; ?>">
    <div class="container">
        <div class="row other-products-title">
            Pozostałe produkty marki
        </div>
    </div>
</div>
<div class="container-full other-products">
    <div class="container">
        <div class="row other-products-list">
            <?php foreach($products as $p): ?>
            <a href="<?=$p->getUrl()?>">
                <img src="<?=$p->file_ub->getUrl('thumb'); ?>" style="height:225px;" />
                <p><?=$p->title; ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
-->
    
<script>


$('.returnContainer').on('click', function(){
    window.history.back();
    return false;
});

</script>