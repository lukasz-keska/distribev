<?php
/**
 * @var $product Products[]
 */

$this->pageTitle = 'Nasze marki';

?>

        
<style>
    
    .brands-list{
        padding: 0px;
    }
    
    .brands-list>.container{
        border: 1px solid #333;
        margin-bottom:1px;
        background-color: #FFF;
    }
    
    .filter-title{
        font-weight:bold; 
        font-size:16px; 
        color:#a0a1a5;
        margin-right: 20px;
        text-transform: uppercase;
    }
    
    .el-filter{
        width:30px; 
        border-radius:15px; 
        padding: 2px 10px 5px 10px;
        background-color: #b7b7b7;
    }
    
    @media (max-width:990px){
        .el-filter{
            margin-right: 2px;
            line-height: 30px;
        }
        
        .filter-row{
            padding: 5px;
        }
    }
    
    .el-filter .fas{
        display:none;
    }
    
    .el-filter.checked{
        background-color:#014e82; 
        
        color:#FFF;     
        
    }
    
    .el-filter.checked .fas{
        display:inline-block;
        margin-right: 5px;
    }
    
    .slide-list-content{
        height: 85px;
    }
    
    .slide-list-content>.plus{
        width: 85px;
    }
    
    .brands-list .brand-content>.name{
        font-size: 25px;
        padding-left: 5%;
        display: inline-block;
    }
    
    .slide-list-content>.logo img{
        max-width: 117px;
        max-height: 80px;
        margin-right: 10px;
    }
    
    .prod-el{
        width:33%;
        text-align: center;
        border-bottom: 1px solid #ccc;
        padding: 10px;
        cursor:pointer;
        display:inline-block;
    }
    
    .prod-el a, .prod-el a:hover, .prod-el:visited{
        text-decoration: none;
        color:#000;
        font-weight:bold;
    }
    
    .prod-el.with-borders{
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
    }
        
    #modal-error{
        height: 58px;
        font-weight: bold;
        color: #d10000;
    }
    
    #modal-error a.close-modal{
        right: 0px;
        top: 0px; 
    }
    
    #filters-container{
        margin-top:40px;
    }
    
    .filter-row{
        margin-bottom:10px;
    }
    
    .filter-row .el-filter{
        cursor: pointer;
    }
    
    .hidden{
        display:none;
    }
    
    .no-products{
        background-color: #FFF;
        width: 100%;
        padding: 20px;
        text-align: center;
        font-weight: bold;
        color: #51516b;
    }
    
    .slide-list-content>.name.col{
        cursor:pointer;
    }
    
    @media(max-width:540px){
        .brand-content .logo{
            display:none;
        }
    }
    
</style>



<section id="content" class="content-bg">
﻿        
    <ul class="d-flex breadcrumbs">
        <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
        <li>></li>
        <li><a href="<?=Yii::app()->controller->createUrl('site/brands')?>">Nasze Marki</a></li>
        <li>></li>
        <?php if(!$subCategory): ?>
            <li><?=$category->title?></li>
        <?php else: ?>
            <li><a href="<?=Yii::app()->controller->createUrl('site/brand',['id'=>$category->category_id])?>"><?=$category->title?></a></li>
            <li>></li>
            <li><?=$subCategory->title?></li>
        <?php endif; ?>
    </ul>

    <div class="d-flex flex-sm-row flex-column justify-content-between align-items-center row">

        <h2 class="content-h2 mt-2 mb-2 col-sm-6 col-12">
            <strong><?=$category->title?>
                <?php if($subCategory): ?>
                    - <?=$subCategory->title?>
                <?php endif; ?>
            </strong>
        </h2>

        <?php include('search.php'); ?>

    </div>


    <div id="filters-container">
        <?php foreach($filters as $nn => $filter): ?>
            <div class="row filter-row">
                <div class="filter-title"><?=$filter['name']?>:</div>
                <div>
                    <?php foreach($filter['elements'] as $el): ?>
                        <span class="el-filter" data-nn="<?=$nn?>"><i class="fas fa-check"></i><?=$el?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
        
    <script>

    $('#filters-container .filter-row .el-filter').on('click', function(){

        $('.brands-list .no-products').addClass('hidden');

        if($(this).hasClass('checked')){
            $(this).removeClass('checked');
        }else{
            $(this).addClass('checked');
        }

        var filtersSelected = {};
        $('#filters-container').find('.el-filter.checked').each(function(){
            if(typeof filtersSelected[$(this).data('nn')] == 'undefined'){
                filtersSelected[$(this).data('nn')] = '';
            }
            filtersSelected[$(this).data('nn')] += ':not([data-'+$(this).data('nn')+'="'+$(this).text()+'"])';
        });

        var filterAttributes = [];    
        $.each(filtersSelected,function(){
            filterAttributes.push(this);
        });

        $('.brand-products .prod-el.hidden').removeClass('hidden');
        $('.brand-products .prod-el').filter(filterAttributes.join(',')).addClass('hidden');
        $('.brands-list>.container>.brand-products.slide-el-content').each(function(){
            if(!$(this).children('.prod-el:not(.hidden)').length){
                if($(this).is(':visible')){
                    $(this).siblings('.brand-content').children('.plus').trigger('click');
                }
                $(this).parent().addClass('hidden');
            }else{
                $(this).parent().removeClass('hidden');
            }
        });

        if(!$('.brands-list>.container:not(.hidden)').length){
            $('.brands-list .no-products').removeClass('hidden');
        }
    })

    </script>

    <div class="container brands-list" style="margin-top:25px;margin-bottom:25px;">

        <div class="no-products hidden"><h4>Brak produktów do wyświetlenia</h4></div>

        <?php foreach($categories as $cat): ?>
            <div class="container">
                <div class="brand-content slide-list-content row<?=(($cid==$cat->category_id)?' active':'');?>">
                    <span class="plus"><i class="fas <?=(($cid==$cat->category_id)?'fa-minus':'fa-plus');?>"></i></span>
                    <span class="name col"><?=$cat->title?></span>
                    <span class="logo"><?php if($cat->filebrand_ub->hasImage()):?><img src="<?=$cat->filebrand_ub->getUrl('original')?>"><?php endif; ?></span>
                </div>
                <div class="brand-products slide-el-content row"<?=(($cid==$cat->category_id)?'':' style="display:none;"');?><?php if($cat->filebanner_ub->hasImage()): ?> data-banner="<?=$cat->filebanner_ub->getUrl('original')?>"<?php endif;?>>     
                    <?php foreach($products[$cat->category_id] as $i=>$product): ?>
                        <div<?php if(isset($productFilters[$product->product_id])){
                                foreach($productFilters[$product->product_id] as $prodFilter => $filterValues){
                                    echo ' data-'.$prodFilter.'="'.$filterValues.'"';
                                }
                            }?> data-target="<?=Yii::app()->controller->createUrl('site/product',['id'=>$product->product_id])?>" class="col-md-4 col-sm-12 prod-el<?=($i%3==1)?' with-borders':''?>">                            
                            <a href="<?=Yii::app()->controller->createUrl('site/product',['id'=>$product->product_id])?>">
                            <img src="<?=$product->file_ub->getUrl('small'); ?>" />
                            <p><?=$product->title?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>


                    <?php/*<div class="col-margin"></div>
                    <div class="text col-sm-10">
                        <?=$cat->tile_desc?>
                    </div>*/?> 
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    
        
</section>        

<div id="modal-error" style="display:none;">
    <?php if(Yii::app()->user->hasFlash('error')): ?>
        <?=Yii::app()->user->getFlash('error');?>
    <?php endif; ?>
</div>

<?php


cs()->registerCssFile('/js/jquery-modal-master/jquery.modal.min.css');
cs()->registerScriptFile('/js/jquery-modal-master/jquery.modal.min.js');
cs()->registerScriptFile('/js/slideList.js');
cs()->registerScriptFile('/js/script.js');

?>


<script>
    
    var blen = $('.brand-products.slide-el-content[data-banner]').length;
    if(blen>0){
        var choose = getRand(0,blen-1);
        $('#header.header-logo').css('background-image', 'url('+$('.brand-products.slide-el-content[data-banner]:eq('+choose+')').data('banner')+')')
    }
    
    <?php if($subCategory): ?>
    
    $('.brand-content>.plus').on('click', function(){
        window.location.href = "<?=Yii::app()->controller->createUrl('site/brands',['id'=>$category->category_id])?>";
        return false;        
    });
    
    <?php endif; ?>
    
    <?php if(Yii::app()->user->hasFlash('error')): ?>
        $("#modal-error").modal({
            escapeClose: true,
            clickClose: true,
            showClose: true
        });
    <?php endif; ?>
    
</script>