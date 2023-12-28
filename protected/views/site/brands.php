<?php
/**
 * @var $product Products[]
 */

$this->pageTitle = 'Nasze marki';

?>

<style>
    
    .our-brands{
        margin-top:1.5rem!important;
    }
    
    .our-brands .our-brands-img-container{
        cursor:pointer;
    }
    
    .our-brands .our-brands-img-container img{
        margin-top:0px !important;
    }
    
    .our-brands .our-brands-img-container .img-container{
        position:relative;
        z-index:1;
    }
    
    .our-brands .our-brands-img-container.blue .img-container:after {
        content: " ";
        z-index: 10;
        display: block;
        position: absolute;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(51, 92, 164, 0.8);
    }
    
    .our-brands-img-container>.tile-desc{
        display:none;
    }
    
    .our-brands-img-container.blue>.our-brands-img-text{
        /*top:26%;*/
    }
    
    .our-brands-img-container>.tile-desc{
        display:none;
    }
    
    .our-brands-img-container.blue>.tile-desc{
        position: absolute;
        display: block;
        width: 100%;
        top: 32%;
        z-index: 10;
        color:#FFF;
    }
   
    .our-brands-img-container.blue>.tile-desc>.tile-inner-desc{
        display:inline-block;  
        padding: 0 45px 3px 0;
        color:#FFF;
        text-align: left;
    }
    
    .our-brands-img-container.blue>.tile-desc>.tile-inner-desc *{
        background-color:transparent !important;
    }
    
</style>

<section id="content" class="content-bg">
    <ul class="d-flex breadcrumbs">
        <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
        <li>></li>
        <li><a href="#">Nasze Marki</a></li>
    </ul>
    
    
    <div class="d-flex flex-sm-row flex-column justify-content-between align-items-center row">
        <h2 class="content-h2 mt-2 mb-2 col-sm-6 col-12">
            <strong>Nasze Marki</strong>
        </h2>
        <?php include('search.php'); ?>
    </div>
    
    
    
    <div class="our-brands pb-5">

        <?php foreach($categories as $i => $c): ?>

            <?php if(!($i%3)): ?>
                <div class="row">
            <?php endif; ?>
                <div class="col-sm-4 col-12 brand-outer" style="margin-bottom: 1.5rem;" data-i="<?=$i?>"<?php if($c->filebanner->hasImage()): ?> data-banner="<?=$c->filebanner->getUrl('original')?>"<?php endif;?>>    
                    <div class="our-brands-img-container" data-url="<?=Yii::app()->controller->createUrl('site/brands',['id'=>$c->category_id])?>">
                        
                        <?php if($c->filebrand->hasImage()): ?>
                        <div class="img-container"><img src="<?=$c->filebrand->getUrl('original')?>" class="img-fluid mt-4" /></div>
                            
                        <?php endif;?>
                            <div class="our-brands-img-text"><?=$c->title?></div>
                            <!--<div class="tile-desc"><div class="tile-inner-desc"><?=$c->tile_desc?></div></div>-->
                    </div>  
                </div>   
            <?php if(($i%3)==2 || !isset($categories[$i+1])): ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>

<?php

cs()->registerScriptFile('/js/script.js');

?>

<script>
    
    
    
    var blen = $('.brand-outer[data-banner]').length;
    if(blen>0){
        var choose = getRand(0,blen-1);
        $('#header.header-logo').css('background-image', 'url('+$('.brand-outer[data-banner]:eq('+choose+')').data('banner')+')')
    }
    
    $(document).ready(function(){
        $('.our-brands .our-brands-img-container').on('mouseover', function(){
            $(this).addClass('blue');
        })

        $('.our-brands .our-brands-img-container').on('mouseout', function(){
            $(this).removeClass('blue');
        })

        $('.our-brands .our-brands-img-container').on('click', function(){
            window.location.href=$(this).data('url');
        });
    });
</script>