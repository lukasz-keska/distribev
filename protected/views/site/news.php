<?php
$this->pageTitle = 'Aktualności';
?>


<div id="content" class="content-bg">

            <ul class="d-flex breadcrumbs">
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/news')?>">Aktualności</a></li>
            </ul>
    
    
    <style>
        
        .news-container{
            padding:2px;
        }
        
        .news-image{
            border:1px solid #333;
            width:100%;
            height:150px;
            margin-top:2px;
            background-size: cover;
            background-repeat: no-repeat;
            cursor:pointer;
        }
        
        .news-link,.news-link:hover{
            color:#000;
            text-decoration: none;
        }
        
        .pager-container{
            margin-bottom: 30px;
            margin-top: 20px;
            margin-left: 0px;
        }
        
    </style>
    
    <div class="row">
        <?php if (!empty($news)): ?>
            <?php foreach ($news as $n): ?>
                
                <div class="col-md-4 col-12" class="news-container">
                    <a class="news-link" href="<?=Yii::app()->controller->createUrl('site/news', ['id'=>$n->news_id]); ?>"/>
                        <div class="news-image" style="background-image:url(<?php echo $n->file->getUrl('original'); ?>)"></div>
                        <div class="news-description">
                            <p><strong><?=$n->title?></strong><?php if(!empty($n->description)): ?>: <?= substr($n->description,0,120).'..'; ?><?php endif; ?></p>
                        </div>
                    </a>
                </div>
                
            <?php endforeach; ?>
        
            

        <?php else: ?>
            <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_INFO, 'Brak aktualności'); ?>
        <?php endif; ?>
    </div>
    
    <div class="row pager-container">
        <?php $this->widget('CLinkPager', array(

                    'currentPage'=>$pages->getCurrentPage(),

                    'itemCount'=>$item_count,

                    'pageSize'=>$page_size,

                    'maxButtonCount'=>6,

                    'nextPageLabel'=>'Następna',

                    'header'=>'',

                    ));
                    ?>
    </div>
    
</div>
