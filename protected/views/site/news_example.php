<?php
$this->pageTitle = 'Aktualności';
?>


<div id="content" class="content-bg">

            <ul class="d-flex breadcrumbs">
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/news')?>">Aktualności</a></li>
                <li>></li>
                <li><a href="#">Dodatkowe</a></li>
            </ul>
    
            <div class="row">
                <div class="col-md-8 col-12">
                    <h1 class="content-h2 mt-2 mb-2">
                        <strong>H1. Adiscipling elit nimb</strong>
                    </h1>

                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus nunc id justo lacinia, vitae ultricies enim convallis. Nunc porta rutrum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor eget</p>

                    <p style="font-size: 16px; letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus nunc id justo lacinia, vitae ultricies enim convallis. Nunc porta rutrum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor eget</p>

                    <img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/oferta1.png" class="img-fluid" />

                    <h2 class="mt-5 mb-3">H2. Adiscipling elit nimb</h2>

                    <p>Lorem ipsum dolor sit amet, trum ex at blandit. Cras augue erat, friLorem ipsum dolor sit amet, trum ex at blandit. Cras augue erat, friLorem ipsum dolor sit amet, trum ex at blandit. Cras augue erat, friLorem ipsum dolor sit amet, trum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor
                        <img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/about-us-img.png" class="img-fluid" style="width: 50%; float: left; margin: 30px 30px 30px 0;" />eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus nunc id justo lacinia, vitae ultricies enim convallis. Nunc porta rutrum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus nunc id justo lacinia, vitae ultricies enim convallis. Nunc porta rutrum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor eget
                        <p class="font-weight-bold">Betase vitae dicta cinska jest:</p>
                        <ul>
                            <li>Ulamco</li>
                            <li>Expasd ijchitecto illo</li>
                            <li>Aperiam fugit sed quia</li>
                            <li>Accusantium dolor rem aperian</li>
                        </ul>
                    </p>

                    <h3 style="font-size: 22px;" class="font-weight-bold">H3. Adiscipling elit nimb</h3>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean maximus nunc id justo lacinia, vitae ultricies enim convallis. Nunc porta rutrum ex at blandit. Cras augue erat, fringilla id mattis sit amet, tristique vel sapien. Quisque in rhoncus lectus. Proin interdum ante sem, nec vestibulum orci auctor eget</p>




                </div>
                <div class="col-md-4 col-12">
                    <div class="d-flex flex-column">
                        <p class="news-title">Aktualności</p>
                        <a href="#"><img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/wine.png" class="img-fluid"/> </a>
                        <span class="pt-4 news-lead">Lorem ipsum dolor sir amet venim irure alue ullamco consecturur anime quis nostrud</span>
                        <span class="text-muted pt-2 pb-4 news-date">23-05-2019</span>

                        <a href="#"><img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/wine.png" class="img-fluid"/> </a>
                        <span class="pt-4 news-lead">Lorem ipsum dolor sir amet venim irure alue ullamco consecturur anime quis nostrud</span>
                        <span class="text-muted pt-2 pb-4 news-date">23-05-2019</span>

                        <a href="#"><img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/wine.png" class="img-fluid"/> </a>
                        <span class="pt-4 news-lead">Lorem ipsum dolor sir amet venim irure alue ullamco consecturur anime quis nostrud</span>
                        <span class="text-muted pt-2 pb-4 news-date">23-05-2019</span>

                        <a href="#"><img src="<?=Yii::app()->request->baseUrl; ?>/upload/project/wine.png" class="img-fluid"/> </a>
                        <span class="pt-4 news-lead">Lorem ipsum dolor sir amet venim irure alue ullamco consecturur anime quis nostrud</span>
                        <span class="text-muted pt-2 pb-4 news-date">23-05-2019</span>
                    </div>

                </div>


            </div>




</div>

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