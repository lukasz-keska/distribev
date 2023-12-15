<?php
$this->pageTitle = 'Aktualności';
?>

<style>
    
    .news-content img{
        max-width: 100%;
        height: auto;
        vertical-align: middle;
        border-style: none;
    }
    
    .news-image-lead{
        width:100%; 
        height:200px; 
        background-size:cover !important;
    }
    
    .news-lead{
        cursor:pointer;
        text-align:justify;
    }
    
</style>

<div id="content" class="content-bg">

            <ul class="d-flex breadcrumbs">
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/news')?>">Aktualności</a></li>
                <li>></li>
                <li><?=$model->title?></li>
            </ul>
    
            <div class="row">
                <div class="col-md-8 col-12 news-content">
                    <h1 class="content-h2 mt-2 mb-2">
                        <strong><?=$model->title?></strong>
                    </h1>
                    
                    <?=$model->content?>

                </div>
                <div class="col-md-4 col-12">
                    <div class="d-flex flex-column">
                        <p class="news-title">Aktualności</p>
                        
                        <?php foreach($news as $n): ?>
                            <?php if($n->file->hasImage()):?>    
                            <a href="<?=Yii::app()->controller->createUrl('site/news',['id' => $n->news_id])?>" class="d-flex flex-column">
                                <div class="news-image-lead" style="background:url(<?=$n->file->getUrl('small')?>);"></div>
                            </a> 
                            <?php endif; ?>
                            <span class="pt-2 pb-4 news-lead" data-target="<?=Yii::app()->controller->createUrl('site/news',['id' => $n->news_id])?>"><?=$n->title?></span>
                            <span class="text-muted pt-2 pb-4 news-date" style="display:none;"><?=date('d-m-Y',  strtotime($n->news_date))?></span>
                            
                        
                        <?php endforeach; ?>
                        
                    </div>
                </div>


            </div>




</div>

<script>
    $(document).on('click','.news-lead[data-target]',function(){
        window.location.href=$(this).data('target');
    });
</script>
<!--
<div class="product-wrapper promotions" style="top: 30px;position: relative;">
    <div class="container">
        <?php if (!empty($news)): ?>
            <?php foreach ($news as $n): ?>
                <a target="news-<?php echo $n->news_id; ?>"/>
                <div class="product-xxl" id="news-<?php echo $n->news_id; ?>">
                    <div class="row">
                        <div class="col-xs-6 relative">
                            <img onclick="$('#news-desc-<?php echo $n->news_id; ?>').toggle(300); return false;" src="<?php echo $n->file->getUrl('original'); ?>" class="img-responsive" alt="tlo">
                        </div>
                        <div class="col-xs-6 relative" style="padding-top: 20px;">
                            <h3><?=$n->title?></h3>
                            <p><?= nl2br($n->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        <?php else: ?>
            <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_INFO, 'Brak aktualności'); ?>
        <?php endif; ?>
    </div>
</div>
-->